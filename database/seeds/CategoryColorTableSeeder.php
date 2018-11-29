<?php

use Illuminate\Database\Seeder;

class CategoryColorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_color')->delete();
        
        \DB::table('category_color')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 3,
                'color_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 3,
                'color_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 3,
                'color_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 3,
                'color_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 3,
                'color_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 3,
                'color_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}