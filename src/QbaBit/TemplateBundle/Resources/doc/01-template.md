Plantilla
=====================================
Una vez creado un bundle de tipo Plantilla es necesario definir algunas configuraciones en el archivo `template.yml`

## Configuración

El archivo `template.yml` de este módulo tiene estas opciones

```yml
template:
   name: Plantilla de Prueba
   views:
       Default\index: index-azul
       Default\Prueba\index: index
   menu:
       render: "QbaBitTestTemplateBundle:Menu:render.html.twig"

```

Apartado `name`

Permite establecer el nombre de la plantilla en el sistema

Apartado `views`

Permite establecer la variante a renderizar de las disponibles en el sistema para esa vista.

Apartado `menu`

Permite la vista para renderizar los menus en la plantilla.
