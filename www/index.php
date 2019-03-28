<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/lib/');
require_once(dirname(__FILE__) . '/lib/router/Route.php');
require_once(dirname(__FILE__) . '/lib/router/Router.php');
require_once(dirname(__FILE__) . '/lib/router/Dispatcher.php');
require_once(dirname(__FILE__) . '/lib/PageError.php');
require_once(dirname(__FILE__) . '/lib/core.php');


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once('../vendor/autoload.php');



function my_autoload($class_name) {
    if (stristr($class_name,'service_'))
        include(dirname(__FILE__).'/service/'.$class_name . '.php');
    if (stristr($class_name,'model_'))
        include(dirname(__FILE__).'/models/'.$class_name . '.php');
    
}
spl_autoload_register('my_autoload');


$router = new Router;

require_once(dirname(__FILE__) . '/lib/routes.php');


$dispatcher = new Dispatcher;
$dispatcher->setClassPath(dirname(__FILE__) . '/controllers/');

$url = urldecode($_SERVER['REQUEST_URI']);

    try 
    {
        $found_route = $router->findRoute($url);
        $dispatcher->dispatch( $found_route );
    } 
    catch ( RouteNotFoundException $e ) {
        PageError::show('404', $url);
    } catch ( badClassNameException $e ) {
        PageError::show('400', $url);
    } catch ( classFileNotFoundException $e ) {
        PageError::show('500', $url);
        echo $e->getMessage();
    } catch ( classNameNotFoundException $e ) {
        PageError::show('501', $url);
    } catch ( classMethodNotFoundException $e ) {
        PageError::show('502', $url);
    } catch ( classNotSpecifiedException $e ) {
        PageError::show('503', $url);
    } catch ( methodNotSpecifiedException $e ) {
        PageError::show('504', $url);
    }catch ( methodRedirect $e ) {
       header("Location:".$e->getMessage()); 

    }catch ( data_ready $e ) {
       header('Content-Type: application/json');
       echo $e->getMessage();
       
    }
?>