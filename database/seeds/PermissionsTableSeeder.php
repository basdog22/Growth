<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-04-02 09:30:00',
                'updated_at' => '2019-04-02 09:30:00',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:30:01',
                'updated_at' => '2019-04-02 09:30:01',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-04-02 09:43:28',
                'updated_at' => '2019-04-02 09:43:28',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_pages',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_pages',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_pages',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_pages',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_pages',
                'table_name' => NULL,
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2019-04-02 09:43:30',
                'updated_at' => '2019-04-02 09:43:30',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-04-02 09:54:41',
                'updated_at' => '2019-04-02 09:54:41',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-04-02 09:54:41',
                'updated_at' => '2019-04-02 09:54:41',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-04-02 09:54:41',
                'updated_at' => '2019-04-02 09:54:41',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-04-02 09:54:42',
                'updated_at' => '2019-04-02 09:54:42',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-04-02 09:54:42',
                'updated_at' => '2019-04-02 09:54:42',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_redirects',
                'table_name' => 'redirects',
                'created_at' => '2019-04-03 05:46:12',
                'updated_at' => '2019-04-03 05:46:12',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_redirects',
                'table_name' => 'redirects',
                'created_at' => '2019-04-03 05:46:12',
                'updated_at' => '2019-04-03 05:46:12',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_redirects',
                'table_name' => 'redirects',
                'created_at' => '2019-04-03 05:46:13',
                'updated_at' => '2019-04-03 05:46:13',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_redirects',
                'table_name' => 'redirects',
                'created_at' => '2019-04-03 05:46:13',
                'updated_at' => '2019-04-03 05:46:13',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_polls',
                'table_name' => 'polls',
                'created_at' => '2019-04-03 05:54:09',
                'updated_at' => '2019-04-03 05:54:09',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_polls',
                'table_name' => 'polls',
                'created_at' => '2019-04-03 05:54:10',
                'updated_at' => '2019-04-03 05:54:10',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_polls',
                'table_name' => 'polls',
                'created_at' => '2019-04-03 05:54:10',
                'updated_at' => '2019-04-03 05:54:10',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_polls',
                'table_name' => 'polls',
                'created_at' => '2019-04-03 05:54:10',
                'updated_at' => '2019-04-03 05:54:10',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_polls',
                'table_name' => 'polls',
                'created_at' => '2019-04-03 05:54:11',
                'updated_at' => '2019-04-03 05:54:11',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_themes',
                'table_name' => 'admin',
                'created_at' => '2019-04-03 09:16:20',
                'updated_at' => '2019-04-03 09:16:20',
            ),
        ));
        
        
    }
}