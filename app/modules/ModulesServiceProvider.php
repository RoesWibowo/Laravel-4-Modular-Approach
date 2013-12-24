<?php namespace App\Modules;

use Illuminate\Support\ServiceProvider;
 
abstract class ModulesServiceProvider extends ServiceProvider {
 
    private $module_path;
 
    private function getModule($args)
    {
        $module = (isset($args[0]) and is_string($args[0])) ? $args[0] : null;
       
        return $module;

    }

    public function boot()
    {
        if ($module = $this->getModule(func_get_args()))
        {

            $this->module_path = app_path().'/modules/'.$module;
            $this->package('app/'.$module, $module, $this->module_path);
        }
    }
 
    public function register()
    {
        if ($module = $this->getModule(func_get_args()))
        {
            $this->module_path = app_path().'/modules/'.ucfirst($module);

            $routes = $this->module_path.'/routes.php';
            
            if(file_exists($routes)) {
                require $routes;
            }

            $filters = $this->module_path . '/filters.php';
            if(file_exists($filters)) {
                require $filters;
            }
        }
    }

 
}