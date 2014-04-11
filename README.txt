1) composer.json
2) Vendor/bin/cake bake app1
3) app1/index.php
define('CAKE_CORE_INCLUDE_PATH',  ROOT . DS . APP_DIR . DS . 'Vendor' . DS . 'pear-pear.cakephp.org' . DS . 'CakePHP');
4) app1/Config/bootstrap.php
// Carrega o loader co Composer
require APP . '/Vendor/autoload.php';
 
// Essas linhas removem o autoloader do CakePHP e o adicionam de
// volta como o primeiro autoloader a ser utilizado. Isso evita
// conflitos entre as classes definidas na sua aplicação e
// definidas em outras bibliotecas.
spl_autoload_unregister(array('App', 'load'));
spl_autoload_register(array('App', 'load'), true, true);