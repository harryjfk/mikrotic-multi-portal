<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 06/09/2017
 * Time: 20:47
 */

namespace QbaBit\CoreBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query;
use QbaBit\CoreBundle\Entity\ChartData;
use QbaBit\CoreBundle\Traits\ServiceContainer;

class ChartDataResolver
{
    use ServiceContainer;

    /**
     * @var array
     */
    private $array;

    /**
     * @param array $resultQuery
     * @param array $fields
     * @return null
     */
    public function getChartData(array  $resultQuery, array $fields, $master)
    {

        
        $this->getGeneratedTypes();

        $t = new ChartData();
        //  echo $query->getSQL();
        //$data = $query->getResult();
        $src_master_data = null;
        $src_master_field = "";
        foreach ($fields as $field) {

            if ($field->getGenerated() !== false) {
                $gen = $this->array[$field->getName()];
                $c = $gen->getTitle(array("data" => $resultQuery, "gen" => $field->getGenerated()));
                if (is_array($c) == false)
                    $c = array($c);
                foreach ($c as $w) {
                    $t->addColumn($w, false, $field->getClass(), $field->getType(), $field->getName() == $master);
                    if ($field->getName() == $master) {
                        $src_master_field = $field->getName();
                        $src_master_data = $gen->getData(array("data" => $resultQuery, "gen" => $field->getGenerated()));
                    }
                }


            }
            else
                $t->addColumn($field->getName(), false, $field->getClass(), $field->getType(), $field->getName() == $master);

        }
        $data = array();
  foreach ($src_master_data as $k)
      foreach ($t->getColumns() as $column)
          if ($column != $t->getMasterColumn() )

              $data[$k][$column->getName()]=0;
        foreach ($resultQuery as $w) {

            $row = array();
            $key = array_keys($w);
$name_r= "";
            foreach ($key as $k) {

                if ($k != "value")
                    foreach ($fields as $field)

                        if ($field->getName() == $master && $k == $master) {
                            $index = $w[$k];
                        } else {

                            if ($field->getGenerated() !== false) {
                                if (is_string($field->getGenerated()))
                                    $name = str_replace("%", "", $field->getGenerated());
                                else
                                    $name = $field->getName();
                            } else
                                $name = $field->getName();
                            if ($name == $k)

                              $name_r= $name;
                        }
            }
           try
           {
               $data[$src_master_data[$index]][$w[$name_r]] = $w["value"];
           }
           catch (\Exception $e)
           {

           }



        }
       

        $t->setData($data);
        return $t;

    }

    /**
     *
     */
    public function getGeneratedTypes()
    {
        if ($this->array == null) {
            $this->array = array();
            $this->array["system_month"] = new MonthGeneratedType($this->container);
            $this->array["system_entities"] = new EntitiesGeneratedType($this->container);
            $this->array["system_year"] = new YearGeneratedType($this->container);
        }

    }


}

class  GeneratedDataType
{
    use ServiceContainer;

    /**
     * @return mixed
     */
    public function getTitle($original_data)
    {
        return "";
    }


    /**
     * @return mixed
     */
    public function getColumnData($original_data)
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function getData($original_data)
    {
        return null;
    }

}

class MonthGeneratedType extends GeneratedDataType
{
    /**
     * @return mixed
     */
    public function getTitle($original_data)
    {
        return $this->container->get('translator')->trans("qba_bit.chart.generated_types.month.title");
    }


    /**
     * @return mixed
     */
    public function getData($original_data)
    {

        $result = array();
        $data = $this->getColumnData($original_data);
        for ($i = 0; $i < count($data); $i++)
            $result[$i + 1] = $data[$i];
        return $result;
    }

    public function getColumnData($original_data)
    {
        $trans = $this->container->get('translator');
        $result = array();
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.january");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.febrary");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.march");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.april");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.may");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.june");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.july");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.agoust");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.september");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.october");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.november");
        $result[] = $trans->trans("qba_bit.chart.generated_types.month.values.december");
        return $result;

    }
}
class YearGeneratedType extends GeneratedDataType
{
    /**
     * @return mixed
     */
    public function getTitle($original_data)
    {
        //return $this->container->get('translator')->trans("qbabit.common.chart.generated_types.year.title");
        return $this->getColumnData($original_data);
    }


    /**
     * @return mixed
     */
    public function getData($original_data)
    {

        $result = array();
        $data = $this->getColumnData($original_data);
        for ($i = 0; $i < count($data); $i++)
            $result[$i + 1] = $data[$i];
        return $result;
    }

    public function getColumnData($original_data)
    {
        $trans = $this->container->get('translator');
        $result = array();
        if( is_array($original_data["gen"]))

        {
            for ($i =  $original_data["gen"]["start"]; $i<= $original_data["gen"]["end"]; $i++) {
                $result[] = $i;

            }
        }
        else
        {
        $y = new \DateTime();
        $y = $y->format("Y");
        $years = "";
        for ($i =  ($y -$original_data["gen"]); $i<=$y; $i++) {
          $result[] = $i;

        }
        }
        return $result;

    }
}

class EntitiesGeneratedType extends GeneratedDataType
{
    /**
     * @return mixed
     */
    public function getTitle($original_data)
    {
        return $this->getColumnData($original_data);
    }


    /**
     * @return mixed
     */
    public function getData($original_data)
    {

        $result = array();
        $data = $this->getColumnData($original_data);
        for ($i = 0; $i < count($data); $i++)
            $result[] = array("value_int" => $i + 1, "value_text" => $data[$i]);
        return $result;
    }

    public function getColumnData($original_data)
    {
        $result = array();
        $name = str_replace('%', "", $original_data["gen"]);
        foreach ($original_data["data"] as $w)
            $result[] = $w[$name];

        return $result;

    }
}