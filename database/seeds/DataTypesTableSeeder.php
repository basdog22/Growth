<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'blog_posts',
                'slug' => 'blog_posts',
                'display_name_singular' => 'Άρθρο',
                'display_name_plural' => 'Άρθρα',
                'icon' => 'voyager-news',
                'model_name' => 'Pvtl\\VoyagerFrontend\\BlogPost',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 13:32:57',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Κατηγορία',
                'display_name_plural' => 'Κατηγορίες',
                'icon' => 'voyager-categories',
                'model_name' => 'Pvtl\\VoyagerBlog\\Category',
                'policy_name' => NULL,
                'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 13:32:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'Pvtl\\VoyagerPageBlocks\\Page',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-04-02 09:43:29',
                'updated_at' => '2019-04-02 09:54:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'page_blocks',
                'slug' => 'page-blocks',
                'display_name_singular' => 'Page Block',
                'display_name_plural' => 'Page Blocks',
                'icon' => 'voyager-file-text',
                'model_name' => 'Pvtl\\VoyagerPageBlocks\\PageBlock',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-04-02 09:54:39',
                'updated_at' => '2019-04-02 09:54:39',
            ),
        ));
        
        
    }
}