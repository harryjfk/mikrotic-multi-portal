Uso de los Menú 
===============================

Los menus del sistema se encuentran definidos dentro de cada bundle, para así garantizar una distribución e instalación muy sencilla.

El sistema esta diseñado para realizar una búsqueda por cada bundle los menus definidos para cada ambiente.


Definición de Menus
----------------
En el archivo `config.yml` se define un apartado llamado `menu` el cual se compone de los ambientes `frontend` y `backend` para asi poder definir los menus de este bundle para cada ambiente.
Estado original
```yml
   menu:
       frontend: "@qba_bit_template.render.menu"
       backend: "@qba_bit_template.render.menu"
```
El valor de estas llaves tiene que ser el nombre de un servicio, el cual tiene que heredar de la clase `MenuAdapter`, ya la misma tiene como objetivo convertir los datos en bruto en colecciones de `MenuItem` para asi proporcionar uniformidad a la generación de la interfaz del menú.

Ahora veamos la clase `MenuItem`

Esta clase es de forma de árbol ya que un menu puede ser padre o hijo de otro.

Tiene los siguientes campos

```php

    private $priority;
    private $text;
    private $index;
    private $ref;
    private $img;

```
La funcion de `priority` es definir la prioridad del menu en relación con sus hermanos, se ordena de menor a mayor con valores enteros.
La funcion de `text` es definir el texto del menú.
La funcion de `index` es definir el nivel que posee dentro del árbol.
La funcion de `ref` es definir la referencia o el vinculo a ejecutar.
La funcion de `$img` es definir el icono en forma de clase de css.

Teniendo como base esto, es necesario conocer la clase `MenuAdapter`.

```php

  class MenuAdapter
  {
     public function getFromArray($array, MenuItem $parent = null)
     {
     ....
     }
     public function getFromDB($tableName, $id_field = "id", $text_field = "name", $parent_field = "parent", $childs_field = "childs", $priority_field = "priority", $ref_field = "ref", $callback = null)
     {
     ...
     }
  }

```

La función de `getFromArray` es convertir de arreglo a `MenuItem`, donde el arreglo debe tener el siguiente formato
```php
 [
  "text"=>"Ejemplo",
  "priority"=>1,
  "ref"=>"http://www.google.com",
  "img"=> "fa fa-share",
  "childs"=>[]
 ]
 
```

La función de `getFromDB` es convertir de una entidad de Doctrine a `MenuItem`, donde los parametros serian

`$tableName` Establece la entidad a realizar la conversión
`$id_field` Establece el nombre del campo id
`$text_field` Establece el nombre del campo texto a mostrar
`$parent_field` Establece el nombre del campo padre
`$childs_field` Establece el nombre del campo de colección de hijos
`$priority_field` Establece el nombre de prioridad
`$ref_field` Establece el nombre del campo de referencia
`$callback` Establece el metodo a calcular la referencia si el valor buscado por `$ref_field` no existe en la entidad. Donde tiene que ser un callback que tenga dos parámetros el primero es el arreglo con los datos del menú y el segundo es un `ServiceContainer` para ayudar a la gestión de las rutas.
 


##Ejemplo de uso

Servicio
```yml
    qba_bit_template.render.menu:
        class: QbaBit\TemplateBundle\MenuBuilder\Menu
        arguments: ['@service_container']
        public: true
 
```

Usando como fuente de datos un arreglo en la clase `Menu`

```php
   class Menu extends MenuAdapter
   {
   
       public function getData()
       {
           $array = array(array("text"=>"Padre","img"=>"fa fa-icon","ref"=>"http://www.google.com","priority"=>0,"childs"=>
            array(array("text"=>"Hijo","img"=>"fa fa-icon1","ref"=>"http://www.google1.com","priority"=>0,"childs"=>
                array()))),
                array("text"=>"Padre2","img"=>"fa fa-icon","ref"=>"http://www.google.com","priority"=>0,"childs"=>
                    array())
                );
            $data= $this->getFromArray($array);
   
        return $data;
       }
   
   }
 
```

Usando como fuente de datos una Entidad llamada `Categorias` en la clase `Menu`, la cual tiene la siguiente definición en `yml`

```yml
  QbaBit\TestBreakBundle\Entity\Categorias:
      type: entity
      table: categorias
      id:
          id:
              type: integer
              nullable: false
              options:
                  unsigned: false
              id: true
              generator:
                  strategy: IDENTITY
      fields:
          name:
              type: string
              nullable: false
              length: 255
              options:
                  fixed: false
          priority:
              type: integer
              nullable: false
              options:
                  unsigned: false
          ref:
              type: string
              nullable: false
              length: 255
              options:
                  fixed: false
      manyToOne:
  
          parent:
              targetEntity: QbaBit\TestBreakBundle\Entity\Categorias
              cascade: ['persist']
              fetch: LAZY
              mappedBy: null
              inversedBy: childs
              joinColumns:
                  parent_id:
                      referencedColumnName: id
              orphanRemoval: true
      oneToMany:
          childs:
              mappedBy: parent
              cascade : ['persist']
              targetEntity: QbaBit\TestBreakBundle\Entity\Categorias
      lifecycleCallbacks: {  }

 
```

y la clase `Menu` se implementaría de la siguiente forma

```php
class Menu extends MenuAdapter
{

    public function getData()
    {
    

        $data = $this->getFromDB("QbaBitTestBreakTemplateBundle:Categorias", "id", "name", "parent", "childs", "priority", "ref2", (function ($item, $container) {
            return "http//:www.google.com";
        }));

        return $data;
    }

}
 
```



[Volver al inicio de la documentación](00-index.md)
