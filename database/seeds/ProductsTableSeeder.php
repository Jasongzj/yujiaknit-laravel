<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Basic Polo',
                'category_id' => 3,
                'fabric' => 'Pique',
                'gsm' => '180gsm',
                'material' => '65%ployester 35%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_polo.jpg',
                'created_at' => '2018-10-15 05:59:08',
                'updated_at' => '2018-10-15 05:59:08',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Single Jersey Polo',
                'category_id' => 3,
                'fabric' => 'single jersey',
                'gsm' => '180gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/single_jersey_polo.jpg',
                'created_at' => '2018-10-15 07:30:54',
                'updated_at' => '2018-10-15 07:30:54',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'School Polo',
                'category_id' => 3,
                'fabric' => 'Pique',
                'gsm' => '180gsm',
                'material' => '100%ployester',
                'attach' => 'children size',
                'head_image' => 'products/school_polo.jpg',
                'created_at' => '2018-10-15 07:33:26',
                'updated_at' => '2018-10-15 07:33:26',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Staff Polo',
                'category_id' => 3,
                'fabric' => 'Pique',
                'gsm' => '180gsm',
                'material' => '65%ployester 35%cotton',
                'attach' => 'embroider',
                'head_image' => 'products/staff_polo.jpg',
                'created_at' => '2018-10-15 07:34:18',
                'updated_at' => '2018-10-15 07:34:18',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Basic T-shirt',
                'category_id' => 4,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_t-shirt.jpg',
                'created_at' => '2018-10-15 07:52:14',
                'updated_at' => '2018-10-15 07:52:14',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Basic V-way T-shirt',
                'category_id' => 4,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_v-way_t-shirt.jpg',
                'created_at' => '2018-10-15 08:06:41',
                'updated_at' => '2018-10-15 08:06:41',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Spendex T-shirt',
                'category_id' => 4,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '95%cotton 5%spendex',
                'attach' => NULL,
                'head_image' => 'products/spandex_t-shirt.jpg',
                'created_at' => '2018-10-15 08:07:23',
                'updated_at' => '2018-10-15 08:07:23',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Basic Vest',
                'category_id' => 5,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_vest.jpg',
                'created_at' => '2018-10-15 08:08:07',
                'updated_at' => '2018-10-15 08:08:07',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Ribbed Vest',
                'category_id' => 5,
                'fabric' => '1x1 ribbed',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/ribbed_vest.png',
                'created_at' => '2018-10-15 08:12:25',
                'updated_at' => '2018-10-15 08:12:25',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Girl Baby Vest',
                'category_id' => 5,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/girl_baby_vest.png',
                'created_at' => '2018-10-15 08:13:58',
                'updated_at' => '2018-10-15 08:13:58',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Boy Baby Vest',
                'category_id' => 5,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/boy_baby_vest.png',
                'created_at' => '2018-10-15 08:14:31',
                'updated_at' => '2018-10-15 08:14:31',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Basic Sweater',
                'category_id' => 6,
                'fabric' => 'brushed fleece',
                'gsm' => '260gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_sweater.jpg',
                'created_at' => '2018-10-15 08:15:20',
                'updated_at' => '2018-10-15 08:15:20',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Winter Sweater',
                'category_id' => 6,
                'fabric' => 'polar fleece',
                'gsm' => '260gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/winter_sweater.jpg',
                'created_at' => '2018-10-15 08:16:22',
                'updated_at' => '2018-10-15 08:16:22',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Basic Hoody',
                'category_id' => 7,
                'fabric' => 'brushed fleece',
                'gsm' => '260gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_hoody.jpg',
                'created_at' => '2018-10-15 08:16:59',
                'updated_at' => '2018-10-15 08:16:59',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Basic Sleeves',
                'category_id' => 9,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '100%cotton',
                'attach' => NULL,
                'head_image' => 'products/basic_long_sleeves.jpg',
                'created_at' => '2018-10-15 08:18:28',
                'updated_at' => '2018-10-15 08:18:28',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Worker Long Sleeves',
                'category_id' => 9,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '65%ployester 35%cotton',
                'attach' => NULL,
                'head_image' => 'products/worker_long_sleeves.jpg',
                'created_at' => '2018-10-15 08:19:25',
                'updated_at' => '2018-10-15 08:19:25',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Spendex V-way T-shirt',
                'category_id' => 4,
                'fabric' => 'single jersey',
                'gsm' => '160gsm',
                'material' => '95%cotton 5%spendex',
                'attach' => NULL,
                'head_image' => 'products/spandex_v-way_t-shirt.jpg',
                'created_at' => '2018-10-15 08:21:38',
                'updated_at' => '2018-10-15 08:21:38',
            ),
        ));
        
        
    }
}