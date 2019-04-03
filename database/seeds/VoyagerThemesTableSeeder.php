<?php

use Illuminate\Database\Seeder;

class VoyagerThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('voyager_themes')->delete();
        
        \DB::table('voyager_themes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Default Theme',
                'folder' => 'default',
                'active' => 1,
                'version' => '1.0',
                'created_at' => '2019-04-03 09:17:07',
                'updated_at' => '2019-04-03 09:19:19',
            ),
        ));
        
        
    }
}