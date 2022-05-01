Pruebas  
===============================

El sistema posee un base para realizar un correcto uso de pruebas, 

Se definieron dos tipos básicos para realizar las pruebas genéricas `DefaultAdminControllerTest` y `DefaultFrontControllerTest`, estas dos clases heredan de `DefaultControllerTest`.

###### DefaultControllerTest

Esta clase posee los métodos básicos que seran utilizados en las clases que heredan de ella.

`getRepository` - Devuelve el repositorio de la clase definida en `getCurrentObject`

`getCurrentObject` - Establece la clase a realizar las pruebas

`getBasicUrl` - Devuelve las direcciones básicas para realizar las pruebas.

`getFiles` - Devuelve la dirección de los archivos por defectos a utilizar en las pruebas.

`getData` - Establece los datos a utilizar en las pruebas.

`getUrlParams` - Establece los parámetros de las direcciones a realizar las pruebas.

`getUrl` ` - Establece las rutas a realizar las pruebas

`getSectionName`  - Establece el nombre de la sección realizar las pruebas

`getController`- Establece el controlador realizar las pruebas

###### DefaultAdminControllerTest

Esta prueba se basa en realizar pruebas a `QbaBitCrudController` y asi poder realizar una prueba de crud de manera sencilla. Utiliza los metodos genéricos funcionales heredados de `DefaultControllerTest`,y agrega 6 pruebas básicas. 

`testIndex` - Prueba para el listado del crud

`testIndexWithSearch` - Prueba para el listado del crud con búsqueda 

`testNewIndex`- Prueba para el nuevo del crud

`testNewData` - Prueba para el nuevo con datos del crud

`testEditIndex` - Prueba para el editado del crud

`testEditData` - Prueba para el editado con datos del crud

`testDelete`- Prueba para el eliminación simple del crud

`testDeleteSelected`- Prueba para el eliminación multiple del crud

Ejemplo de uso

```php
class LanguageControllerTest extends DefaultAdminControllerTest
{
    public function getCurrentObject()
    {
        return "QbaBit\\LanguageBundle\\Entity\\Language";
    }
    public function getSectionName()
    {
        return "Idiomas";
    }
    public function getController()
    {
        return "QbaBit\LanguageBundle\Controller\Admin\LanguageController";
    }

    public function getData($type, ContainerInterface $container)
    {
        if ($type == "delete_list")
            return parent::getData($type, $container);
        else {


            $t_image = array();

            $t_image[] = $this->getDefaultFiles($container)["image"];
            $files_image = $this->getFiles($t_image);
            $fields = array(
                'name' => 'value',
                "shortcode" =>"ER",
                "longcode"=>"ER",
                 "image_file"=> '',
               // 'location' =>$container->get("qbabit.repository.locations")->findAll()[0]->getId(),
                'enabled' => 'true',

            );

            return array('fields' => array('language' => $fields), 'files' => array('language' => array(

                'image_file' => $files_image[0],


            )));


        }
    }



}
```

[Volver al inicio de la documentación](00-index.md)
