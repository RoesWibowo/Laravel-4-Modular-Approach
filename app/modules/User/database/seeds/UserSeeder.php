<?php namespace App\Modules\User\Database\Seeds;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $seeds = array(
		            'firstname' => 'Roes',
		            'lastname' 	=> 'Wibowo',
		            'website' 	=> 'http://roes-wibowo.com'
	        	);
 
        DB::table('users')->insert($seeds);
    }

}