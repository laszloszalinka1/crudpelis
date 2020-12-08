<?php

use Illuminate\Database\Seeder;
use App\Models\Status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $statuses = array(
        			['name' => 'Activo'],
        			['name' => 'Inactivo'],
         		);

        foreach ($statuses as $value) {
        	$statuses = new Status;
        	$statuses->name = $value['name'];
        	$statuses->type_status_id = 1;
        	$statuses->save();
        }	
    }
}
