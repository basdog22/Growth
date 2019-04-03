<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'primary',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'social',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
        ));
        
        
    }
}