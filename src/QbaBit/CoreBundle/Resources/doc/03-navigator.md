Uso de los Navigators 
===============================

Los navigators del sistema se encuentran definidos dentro de cada bundle, para así garantizar una distribución e instalación muy sencilla.

El sistema esta diseñado para realizar una búsqueda por cada bundle los navigators definidos para cada ambiente.


Definición de Navigators
----------------
En el archivo `config.yml` se define un apartado llamado `navigator` el cual se compone de los ambientes `frontend` y `backend` para asi poder definir los navigators de este bundle para cada ambiente.
Estado original
```yml
   navigator:
       frontend:
          priority: -1
          render: null
       backend:
          priority: 2
          render: "qba_bit_language_language_nav"
```

Posee dos campos `priority` y `render` donde 

`priority` establece la prioridad a mostrar en navigator

`render` establece la ruta de un controlador donde se renderiza la interfaz.


[Volver al inicio de la documentación](00-index.md)
