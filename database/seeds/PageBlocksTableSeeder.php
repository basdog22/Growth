<?php

use Illuminate\Database\Seeder;

class PageBlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_blocks')->delete();
        
        \DB::table('page_blocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'type' => 'template',
                'path' => 'testimonial',
                'data' => '{"content":"Company X is both attractive and highly adaptable. Company X has really helped our business thrive - I can\'t wait to see what comes next for us","title":"John Smith","sub_title":"Founder & CEO","br_1":"null","image":"","br_2":"null","spaces":"3","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 1,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 2,
                'created_at' => '2019-04-02 09:54:50',
                'updated_at' => '2019-04-02 09:58:25',
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'type' => 'template',
                'path' => 'content_one_column',
                'data' => '{"html_content_1":"<h2 style=\\\\\\"text-align: center;\\\\\\">Welcome to Voyager Frontend<\\/h2><p style=\\\\\\"text-align: center;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/p>","spaces":"2","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 1,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 3,
                'created_at' => '2019-04-02 09:54:51',
                'updated_at' => '2019-04-02 09:58:10',
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 1,
                'type' => 'template',
                'path' => 'content_two_columns',
                'data' => '{"html_content_1":"<p style=\\\\\\"text-align: left;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: left;\\\\\\"><\\/p>","html_content_2":"<p><span style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/span><\\/p>","spaces":"0","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 1,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 4,
                'created_at' => '2019-04-02 09:54:51',
                'updated_at' => '2019-04-02 09:58:11',
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 2,
                'type' => 'template',
                'path' => 'content_one_column',
                'data' => '{"html_content_1":"<p style=\\\\\\"text-align: center;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/p>","spaces":"2","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 0,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 10000,
                'created_at' => '2019-04-02 09:54:52',
                'updated_at' => '2019-04-02 09:54:52',
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 3,
                'type' => 'template',
                'path' => 'content_one_column',
                'data' => '{"html_content_1":"<p>You can install the <a href=\\"https:\\/\\/github.com\\/pvtl\\/voyager-forms\\">Voyager Forms<\\/a> module and add the appropriate tag here.<\\/p>","spaces":"1","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 0,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 10000,
                'created_at' => '2019-04-02 09:54:53',
                'updated_at' => '2019-04-02 09:54:53',
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 1,
                'type' => 'template',
                'path' => 'content_three_columns',
                'data' => '{"html_content_1":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.<\\/p>","html_content_2":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.<\\/p>","html_content_3":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.<\\/p>","spaces":0,"animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 0,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 5,
                'created_at' => '2019-04-02 09:55:33',
                'updated_at' => '2019-04-02 09:58:11',
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 1,
                'type' => 'template',
                'path' => 'callout',
                'data' => '{"size":"0","fade_background":"on","br_1":null,"background_image":"blocks\\/3Rz3vzC1RQpqWgTJ7JXOOGdwqISZsB4IjOMoJN5M.jpeg","br_2":null,"title":"Changing the World!","content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.","br_3":null,"button_text":null,"link":null,"br_4":null,"spaces":"0","animate":"on"}',
                'is_hidden' => 0,
                'is_minimized' => 0,
                'is_delete_denied' => 0,
                'cache_ttl' => 0,
                'order' => 1,
                'created_at' => '2019-04-02 09:58:02',
                'updated_at' => '2019-04-02 09:58:41',
            ),
        ));
        
        
    }
}