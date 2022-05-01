Formularios  
===============================

El sistema posee un base para realizar un correcto uso de formularios, siguiendo las practicas sugeridas por Symfony.

Symfony definió los formularios de forma genérica, QbaBit los definio de dos maneras o tipos de forma lógica, aunque siguen siendo los formularios originales de Symfony. 

`Formulario` - Es el responsable realizar las operaciones de datos relacionados con una entidad.

`Componente o Control` - Es el control que sirve de plataforma de interfaz para el tipo `Formulario`, estos deben ser lo mas genéricos y flexibles posible.

Todos los `componentes` de QbaBit requieren heredar de la clase `AccessBaseType` la cual posee los siguientes métodos

`getRenderTwig` - Necesario para poder agregarlo a la hora de cargar las plantillas personalizadas dentro del sistema. Es necesario que devuelva una ruta de plantilla de twig.

Se busca que en la plantilla twig se encuentre el código necesario para que el control realice su función incluyendo la importación de `css` y `js` para asi no sobre cargar la plantilla general y poder realizar una gestión dinámica de estos.

##Editores

Los editores son necesarios para poder realizar una importacion automatizada por comandos. Establece los valores por defecto y la manera de usar los controles en el momento de crear los cruds.

La configuración de los valores por defecto se encuentra en el archivo 
`config.yml` del `CoreBundle` en el apartado `generator - defaultTypes`. Este apartado esta compuesto por un arreglo de tipos de controles por asi decirlo, este tipo de control debe tener una definición de los siguientes campos
 
`name` - Nombre del campo por el cual filtrar, puede ser nulo y utilizar caracteres como *. 

`type` - Tipo de la variable del campo. 

`control`- Nombre o Identificar del control, es la propiedad `getSimpleType` del control definido.

Ejemplo de uso

`{ name: null, type: string, control: text }` - Establece el control `text` para todos los campos que sean de tipo `string`

`{ name: '*image*', type: string, control: imagefile }` - Establece el control `imagefile` para todos los campos que sean de tipo `string` y que posea dentro de su nombre el texto `image`



######Definición de Editor

Esta clase tiene como objetivo ser una base para que de ella se herede y poder asi crear varios tipos de `editores` que se corresponden con un `Componente` especifico.

Funciones de la clase


`hasAdditionalParams` - Establece si el control requiere parámetros adicionales 

`getType` - Establece el `Componente` al cual corresponde el `Editor`

`getDefaultTestValue` - Devuelve los valores por defecto a utilizar al momento de realizar las pruebas.

`getIndexHtml` - Devuelve el codigo `twig` a utilizar al momento de generar el codigo de este control en el listado del crud.

`getUsesParams` - Devuelve los parámetros a agregar a la seccion de `uses` al momento de generar el formulario.

`getDefaultValues` - Devuelve los valores por defecto para el control.

`getSimpleType` - Devuelve el nombre simple del `Componente`, es autocalculado de la siguiente manera, `TextType` -> `text`

`getFieldName` - Devuelve el nombre del campo.

`isScalar` - Establece si es un valor escalar.

[Volver al inicio de la documentación](00-index.md)
