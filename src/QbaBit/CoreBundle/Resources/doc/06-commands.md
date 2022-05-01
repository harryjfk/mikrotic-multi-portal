Comandos  
===============================

El sistema posee varios comandos diseñados para mejorar y automatizar la creación básica de proyectos. Se listan a continuación

###### qbabit:build:bundle

Este comando genera un modulo de `QbaBit` completo, o sea con entidades, formularios, vistas, controladores y pruebas. Realiza su función en 3 fases 
`init`,`ormTypes`y `finish` 

`init` -  Crea el bundle e importa el esquema de datos de la base de datos enlazada.

`ormTypes` -  Agrega campos al archivo de esquema de datos para establecer el control por defecto que permite la gestión de cada campo. Véase [Formularios](05-forms.md) - Indice Editores. En esta fase se recomienda revisar que el establecimiento de estos valores por defectos se hayan realizado correctamente y además revisar que las relaciones en el esquemas estén completas y correctas.

`finish` - Es el proceso final donde se realizan toda la generacion de código automatico.


`Parámetros`

Este comando posee los siguientes parámetros:

`bundle` - Nombre del Bundle a crear. Ejemplo `Nuevo` y el sistema lo creara automáticamente como `QbaBitNuevoBundle`

`clear` - Borra cache al terminar el proceso final.

`replace` - Reemplaza el bundle con el mismo nombre si existe.

`mode` - Requiere los 3 modos anteriormente explicados.


Utiliza internamente los siguientes comandos:

`qbabit:generate:bundle`

`qbabit:generate:controller`

`qbabit:generate:form`
                    
                 
###### qbabit:generate:bundle

Este comando es una implementación del comando `generate:bundle` de Symfony, lo que con algunos cambios para que genere un modulo de QbaBit.

###### qbabit:generate:controller

Este comando es una implementación del comando `generate:controller` de Symfony, lo que con algunos cambios para que genere un modulo de QbaBit.

###### qbabit:generate:form
             
Este comando es una implementación del comando `generate:form` de Symfony, lo que con algunos cambios para que genere un modulo de QbaBit.
         
[Volver al inicio de la documentación](00-index.md)
