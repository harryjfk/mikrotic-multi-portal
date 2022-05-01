Cruds Genéricos y Controladores
===============================

En el sistema se creo una encapsulación de funcionalidades de los controladores con el objetivo de optimizar los procesos de gestión.

Siguiendo este objetivo se creo un crud-controlador genérico, permitiendo realizar la gestión (`insertar`,`editar`,`eliminar` y `mostrar`) de forma automatizada pero sin perder maniobrabilidad, o sea que el usuario puede cambiar su implementación de manera fácil, no como pasaba por ejemplo con el bundle `sonata`.

Empezemos
----------------

####QbaBitBaseController

Todos los controladores que conforman parte del sistema de módulos de QbaBit requieren heredar del controlador `QbaBitBaseController`, la cual posee funcionalidades muy genéricas de una controlador, por ejemplo:

`additionalParams` - Establece las bases para agregar parámetros al momento de renderizar la interfaz

`render` - Renderiza la interfaz, con la diferencia que si existe el bundle de template le delega esta responsabilidad.

####QbaBitCrudController

Este controlador permite la gestión automatizada de una entidad con gran flexibilidad.

Posee los siguientes métodos, los cuales se encuentran separados por funcionalidad:

######Rutas

Establece las rutas para las diferentes operaciones.

`getObjectAsRouteURL` - Realiza el tratamiento de cadenas para devolver la base para las rutas en formato de symfony.

`getNewUrl` - Utilizando `getObjectAsRouteURL` y agregando la cadena `_new`, responde a la operación de creación de la entidad. Ejemplo `qba_bit_language_language_new`

`getDeleteUrl` - Utilizando `getObjectAsRouteURL` y agregando la cadena `_delete`, responde a la operación de borrado de la entidad. Ejemplo `qba_bit_language_language_delete`

`getEditUrl` - Utilizando `getObjectAsRouteURL` y agregando la cadena `_edit`, responde a la operación de editado de la entidad. Ejemplo `qba_bit_language_language_edit`

`getListUrl` - Utilizando `getObjectAsRouteURL` y agregando la cadena `_list`, responde a la operación de listado de la entidad. Ejemplo `qba_bit_language_language_list`

######Pruebas

`doTest` - Realiza operación para garantizar la integridad de los datos en las pruebas del sistema.

######Vistas
   
Establece las vistas para las diferentes operaciones.

`getObjectAsRouteTwig` - Realiza el tratamiento de cadenas para devolver la base para las vistas en formato de symfony.

`getEditRender` - Utilizando `getObjectAsRouteTwig` y agregando la cadena `:edit`, responde a la operación de editado de la entidad. Ejemplo `getQbaBitTemplateAdminLTEBundle:Admin/Language:edit.html.twig`.

`getIndexRender` - Utilizando `getObjectAsRouteTwig` y agregando la cadena `:index`, responde a la operación de listado de la entidad.Ejemplo `getQbaBitTemplateAdminLTEBundle:Admin/Language:index.html.twig`.

`getShowRender` - Utilizando `getObjectAsRouteTwig` y agregando la cadena `:show`, responde a la operación de listado de la entidad. Ejemplo `getQbaBitTemplateAdminLTEBundle:Admin/Language:show.html.twig`.
   
   
######Traduccion

`getBasicNameTranslated` - Realiza el tratamiento de cadenas para devolver el nombre de la vista.
   
   
######Parámetros adicionales

`additionalParams` - Permite agregar parámetros al momento de renderizar desde el controlador en curso sin modificar el código básico.

`additionalFilterParams` -  Permite agregar parámetros al momento de realizar la consulta desde el controlador en curso sin modificar el código básico.
   
######Formularios

`getFormType` - Calcula el archivo responsable del formulario. Ejemplo: `QbaBit\LanguageBundle\Form\Admin\LanguageType`

`getMethod` - Permite establece el método de envio del formulario.

`getForm` - Realiza la creación del formulario haciendo uso de `getFormType` y `getMethod` .

`handleForm` - Realiza el manejo de los datos que fueron enviados al formulario, es usuado por `newAction` y `editAction`.

   
######Autorizacion y Roles 

El sistema permite crear los roles de forma automática asi como su comparación, posee los siguientes métodos

`getObjectAsAutorizathion` - Realiza el tratamiento de cadena para comparar con los roles de symfony. Ejemplo `ROLE_LANGUAGE_LANGUAGE_LIST`
 
######Configuraciones 

`getBundleConfig` - Devuelve la configuración del bundle al que pertenece el controlador.

`getFilterConfigurations` - Devuelve la configuración del filtro a partir de un `Request`.

######métodos auxiliares

`getRepository` - Devuelve el repositorio perteneciente a la entidad.

`canBeDeleted` - Establece si se puede eliminar la entidad en cuestion.


######métodos de eventos

`preEditRender` - Evento a ejecutar antes de renderizar el edit .

`preValidated` - Evento a ejecutar antes de validar el formulario.

`preFlush` - Evento a ejecutar antes de guardar los cambios de la entidad a la db.

`postFlush` - Evento a ejecutar después de guardar los cambios de la entidad a la db.

######métodos de rutas de symfony

`indexAction` - Método raíz para el listado de la entidad .

`deleteAction` - Método raíz para el borrado de la entidad .

`showAction` - Método raíz para mostrar la entidad .

`newAction` - Método raíz para la creación de la entidad .

`editAction` - Método raíz para la edición de la entidad .

`deleteListAction` - Método raíz para el borrado de un listado de la entidad .


######Método Impresindible

El único método imprescindible para el correcto funcionamiento es `getCurrentObject`, el cual tiene que ser definido en la clase que hereda de `QbaBitCrudController`.

Ejemplo de uso

```php
class LanguageController extends QbaBitCrudController
{
  protected function getCurrentObject()
    {
        return "QbaBit\LanguageBundle\Entity\Language";
    }
}
```


[Volver al inicio de la documentación](00-index.md)
