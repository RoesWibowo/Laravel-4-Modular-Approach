<?php namespace App\Modules\User\Controllers;

use App\Controllers\BaseController;
use App\Modules\User\Models\Users;
use Config, View;
 
class SomeController extends BaseController {

	public function getIndex()
	{
		$sample['title'] 	= Config::get('user::sample.appname');
		$sample['users']	= Users::all();
	
		return View::make('user::userlist',$sample);
	}

}