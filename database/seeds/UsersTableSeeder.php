<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'basdog22',
                'email' => 'basdog22@gmail.com',
                'avatar' => 'users/April2019/M52pWbIwdqhkNIzDGmBX.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hm4R2bTQvgDBHZMh6agxw.n0OBgZghHV367Iur6MoSuZUq3Yr4rL6',
                'remember_token' => NULL,
                'settings' => '{"locale":"el"}',
                'created_at' => '2019-04-02 09:31:04',
                'updated_at' => '2019-04-02 13:41:28',
            ),
        ));
        
        
    }
}