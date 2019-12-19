<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ciri2 query builder, kode dimulai dari DB
        // $bukuku = [
        //     'title'=>'aku suka kamu, tapi kamu gx suka aku',
        //     'pengarang'=>'author allay',
        //     'penerbit'=>'amikom',
        //     'tahun'=>2010
        // ];

        $faker = Faker::create('id_ID');

        for($i=1;$i<=10;$i++){
            DB::table('books')->insert(
                [
                    'title'=>$faker->word . 'title',
                    'pengarang'=>$faker->name,
                    'penerbit'=>$faker->company,
                    'tahun'=>rand(2005,2019)
                ]
            );
        }
    }
}
