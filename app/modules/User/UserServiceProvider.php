<?php namespace App\Modules\User;

use App\Modules\ModulesServiceProvider;
 
class UserServiceProvider extends ModulesServiceProvider {
 
    public function register()
    {
        parent::register('User');
    }
 
    public function boot()
    {
        parent::boot('User');
    }
 
}