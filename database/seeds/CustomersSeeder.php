<?php

use App\Customer;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            $name = $faker->name;
            $slug = Str::slug($name, '-', true);
            $data = [
                'name' => $name,
                'slug' => $slug,
                'phone' => $faker->e164PhoneNumber,
                'email' => $slug . '@' . $faker->freeEmailDomain,
                'address' => $faker->streetAddress . ' ' . $faker->city,
                'created_at' => now(),
                // 'updated_at' => Time::now(),
                // 'deleted_at' => Time::now(),
            ];
            // $this->db->table('comics')->insert($data);
            Customer::insert($data);
        }
    }
}
