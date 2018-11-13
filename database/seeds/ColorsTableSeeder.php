<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colors')->delete();
        
        \DB::table('colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Yellow',
                'rgb' => '#ffe52b',
                'sort' => 0,
                'created_at' => '2018-10-11 07:59:10',
                'updated_at' => '2018-10-11 08:45:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Navy',
                'rgb' => '#22395e',
                'sort' => 0,
                'created_at' => '2018-10-11 07:59:44',
                'updated_at' => '2018-10-11 07:59:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Orange',
                'rgb' => '#ff6d00',
                'sort' => 0,
                'created_at' => '2018-10-11 08:00:20',
                'updated_at' => '2018-10-11 08:00:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sky',
                'rgb' => '#8cbed6',
                'sort' => 0,
                'created_at' => '2018-10-11 08:01:22',
                'updated_at' => '2018-10-11 08:01:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lemon',
                'rgb' => '#68ff47',
                'sort' => 0,
                'created_at' => '2018-10-11 08:02:01',
                'updated_at' => '2018-10-11 08:02:01',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Grey',
                'rgb' => '#818287',
                'sort' => 0,
                'created_at' => '2018-10-11 08:02:44',
                'updated_at' => '2018-10-11 08:02:44',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Khaki',
                'rgb' => '#a18e5d',
                'sort' => 0,
                'created_at' => '2018-10-11 08:03:44',
                'updated_at' => '2018-10-11 08:03:44',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Purple',
                'rgb' => '#bb28bb',
                'sort' => 0,
                'created_at' => '2018-10-11 08:04:06',
                'updated_at' => '2018-10-11 08:04:06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pink',
                'rgb' => '#d62597',
                'sort' => 0,
                'created_at' => '2018-10-11 08:04:43',
                'updated_at' => '2018-10-11 08:04:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Emerald',
                'rgb' => '#00997b',
                'sort' => 0,
                'created_at' => '2018-10-11 08:05:20',
                'updated_at' => '2018-10-11 08:05:44',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Red',
                'rgb' => '#f32f28',
                'sort' => 0,
                'created_at' => '2018-10-11 08:06:31',
                'updated_at' => '2018-10-11 08:06:31',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Green',
                'rgb' => '#17b917',
                'sort' => 0,
                'created_at' => '2018-10-11 08:07:10',
                'updated_at' => '2018-10-11 08:07:10',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Blue',
                'rgb' => '#0043cc',
                'sort' => 0,
                'created_at' => '2018-10-11 08:07:33',
                'updated_at' => '2018-10-11 08:07:33',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Black',
                'rgb' => '#000000',
                'sort' => 0,
                'created_at' => '2018-10-11 08:07:53',
                'updated_at' => '2018-10-11 08:07:53',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'White',
                'rgb' => '#ffffff',
                'sort' => 0,
                'created_at' => '2018-10-11 08:08:18',
                'updated_at' => '2018-10-11 08:08:39',
            ),
        ));
        
        
    }
}