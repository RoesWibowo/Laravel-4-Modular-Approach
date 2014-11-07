<?php namespace App\Modules\User\Controllers;

use App\Modules\User\Models\Users;
use Controller, Config, View;
 
class UserController extends Controller {

	public function getIndex()
	{
		$sample['title'] 	= Config::get('User::myconfig.appname');
		$sample['users']	= Users::all();
	
		return View::make('User::userlist',$sample);
	}

}
