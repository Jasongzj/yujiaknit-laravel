<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'POLO',
                'icon' => 'categories/polo1.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 03:15:49',
                'updated_at' => '2018-10-11 03:15:49',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'T-SHIRT',
                'icon' => 'categories/spandex_t-shirt.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 03:17:44',
                'updated_at' => '2018-10-11 03:17:44',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'VEST',
                'icon' => 'categories/vest1.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 03:18:23',
                'updated_at' => '2018-10-11 03:18:23',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'SWEATER',
                'icon' => 'categories/basic_sweater.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 03:21:36',
                'updated_at' => '2018-10-11 03:21:36',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'HOODY',
                'icon' => 'categories/basic_hoody.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 03:21:57',
                'updated_at' => '2018-10-11 03:21:57',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'LONG SLEEVES',
                'icon' => 'categories/basic_long_sleeves.jpg',
                'sort' => 0,
                'created_at' => '2018-10-11 07:55:38',
                'updated_at' => '2018-10-11 07:55:38',
            ),
        ));
        
        
    }
}