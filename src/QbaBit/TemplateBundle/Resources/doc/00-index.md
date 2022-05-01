Módulo Genérico de Plantillas
=====================================
La función principal de este módulo es permitir gestionar los temas o pieles del sistema.

## Configuración

El archivo `config.yml` de este módulo tiene estas opciones

```yml
 qba_bit_template:
    enviroment:
        frontend: TestTemplate
        backend: null

```

Apartado `enviroment`

Permite establecer la bundle de tipo plantilla a renderizar en cada uno de los ambientes (`FrontEnd` o `BackEnd`)

