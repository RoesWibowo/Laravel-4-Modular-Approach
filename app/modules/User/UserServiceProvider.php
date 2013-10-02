<?php namespace App\Modules\User;

use App\Modules\ModulesServiceProvider;
 
class UserServiceProvider extends ModulesServiceProvider {
 
    public function register()
    {
        parent::register('user');
    }
 
    public function boot()
    {
        parent::boot('user');
    }
 
}