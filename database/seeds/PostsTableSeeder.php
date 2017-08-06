<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset Tabel
        DB::table('posts')->truncate();

        // Create Object Faker
        $faker = Factory::create();
        // Siapkan Variabel dalam bentuk Array untuk menyimpan data Dummy
        $posts = [];

        // Generate 30 Data
        for ($i = 1; $i <= 30; $i++)
        {
          // Tampung data dalam variabel $posts (Variabel dengan tipe Array)
          $date  = date("Y-m-d H:i:s", strtotime("2017-08-06 19:27:00 + {$i} day"));
          $posts[] = [
            'title'   => $faker->sentence(rand(5,10)), //Panjang kata biar bervariasi antara 15 s.d. 20
            'content' => $faker->text(rand(100,200)),
            'created_at' => $date,
            'updated_at' => $date
          ];
        }

        // Simpan Data ke dalam Database
        DB::table('posts')->insert($posts);

    }
}
