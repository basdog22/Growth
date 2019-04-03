<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2018_04_18_000000_create_blog_posts_table',
                'batch' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2018_04_18_000000_create_pages_table',
                'batch' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2018_04_19_224316_add_fields_to_pages_table',
                'batch' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2018_05_09_000000_create_categories_table',
                'batch' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2018_05_11_000000_remove_blog_keywords_field',
                'batch' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2018_05_11_000001_remove_pages_keywords_field',
                'batch' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2018_02_11_224531_create_page_blocks_table',
                'batch' => 3,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2017_06_26_000000_create_bread_templates_table',
                'batch' => 4,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2019_04_03_112537_create_blog_posts_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2019_04_03_112537_create_bread_templates_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2019_04_03_112537_create_categories_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2019_04_03_112537_create_data_rows_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2019_04_03_112537_create_data_types_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2019_04_03_112537_create_menu_items_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2019_04_03_112537_create_menus_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2019_04_03_112537_create_page_blocks_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2019_04_03_112537_create_pages_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2019_04_03_112537_create_password_resets_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2019_04_03_112537_create_permission_role_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2019_04_03_112537_create_permissions_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2019_04_03_112537_create_roles_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2019_04_03_112537_create_settings_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2019_04_03_112537_create_translations_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2019_04_03_112537_create_user_roles_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2019_04_03_112537_create_users_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2019_04_03_112537_create_voyager_poll_answers_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2019_04_03_112537_create_voyager_poll_answers_users_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2019_04_03_112537_create_voyager_poll_questions_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2019_04_03_112537_create_voyager_polls_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2019_04_03_112537_create_voyager_redirects_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2019_04_03_112537_create_voyager_theme_options_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2019_04_03_112537_create_voyager_themes_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_categories_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_data_rows_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_menu_items_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_permission_role_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_user_roles_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_users_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_voyager_poll_answers_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_voyager_poll_answers_users_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_voyager_poll_questions_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2019_04_03_112538_add_foreign_keys_to_voyager_theme_options_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}