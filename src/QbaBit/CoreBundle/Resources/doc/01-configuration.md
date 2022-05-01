Configuración del Módulo Núcleo
===============================

Todos los módulos del sistema de QbaBit requieren heredar de la clase `QbaBitBaseBundle` ya que posee métodos específicos para su correcto comportamiento como parte del sistema de módulos QbaBit.

Empezemos
----------------
Todos los módulos que forman parte del sistema de QbaBit tienen que definir algunas operaciones para ser interpretados como tales.

Después de haber creado un modulo o `bundle` básico de Symfony es necesario ir a la clase Bundle creada en la raíz del nuevo bundle.
Se tomara como ejemplo la clase QbaBitTemplateBundle

Estado original
```php
 class QbaBitTemplateBundle extends Bundle
 {
    
 }
```
Para que el sistema identifique como parte suyo hacemos que herede de la clase `QbaBitBaseBundle`

Quedaría de la siguiente manera
```php
class QbaBitTemplateBundle extends QbaBitBaseBundle
{
    public function getCode()
    {
        return "template";
    }


    protected function getDir()
    {
       return __DIR__;
    }
}
```

La función `getCode` retorna el código del modulo dentro del sistema que hará función de identificador.

La función `getDir` devuelve el directorio raíz del modulo el cual es necesario para que se pueda cargar la configuración del modulo. El valor de ejemplo es el necesario para su correcto uso.

Una vez realizada la operación de modificar la clase Bundle es necesario realizar dos cambios mas en los archivos que se encuentran en la carpeta `DependencyInjection` del nuevo bundle.
Son dos archivos llamados `Configuration` y en este caso `QbaBitTemplateExtension`.

Archivo `Configuration`
La modificación en este archivo es modificar la clase padre que en su estado original implementa una interfaz de tipo `ConfigurationInterface`

Estado original
```php
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('qba_bit_template');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
```
 
por una que hereda de la clase `ConfigurationBase` ya que esta clase base posee métodos útiles y genéricos para la gestión de las configuraciones.

```php
class Configuration extends ConfigurationBase
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('qba_bit_template');
         // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}}
```

Archivo `QbaBitTemplateExtension` o el que tiene como subfijo `Extension`


La modificación en este archivo es modificar la clase padre que en su estado original hereda de una clase de tipo `Extension`

Estado original
```php
class QbaBitTemplateExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
```
 
por una que hereda de la clase `QbaBitBaseExtension` ya que esta clase base posee métodos útiles y genéricos para la gestión de las configuraciones.

```php
class QbaBitTemplateExtension extends QbaBitBaseExtension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'qba_bit_template';
    }
    public function getConfigurationObject()
    {
        return new Configuration();
    }
    protected function getDir()
    {
        return __DIR__;
    }
}
```
Esta nueva implementación tiene 3 nuevos métodos `getName`,`getConfigurationObject`,`getDir`.

El método `getName` devuelve el nombre necesario para unir la configuración del bundle con el mismo bundle internamente.

El método `getConfigurationObject` devuelve el objeto especifico de configuración del sistema que creamos anteriormente.

La función `getDir` devuelve el directorio raíz del modulo el cual es necesario para que se pueda cargar la configuración del modulo. El valor de ejemplo es el necesario para su correcto uso.



[Volver al inicio de la documentación](00-index.md)
