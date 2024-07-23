<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_units')->insert([
            ['id' => 1, 'name' => 'bottle'],
            ['id' => 2, 'name' => 'capsule'],
            ['id' => 3, 'name' => 'cream'],
            ['id' => 4, 'name' => 'effervescent'],
            ['id' => 5, 'name' => 'eye drops'],
            ['id' => 6, 'name' => 'gel'],
            ['id' => 7, 'name' => 'lotion'],
            ['id' => 8, 'name' => 'piece'],
            ['id' => 9, 'name' => 'sachet'],
            ['id' => 10, 'name' => 'solution'],
            ['id' => 11, 'name' => 'spray'],
            ['id' => 12, 'name' => 'suppository'],
            ['id' => 13, 'name' => 'syringe'],
            ['id' => 14, 'name' => 'syrup'],
            ['id' => 15, 'name' => 'tablet'],
            ['id' => 16, 'name' => 'vaginal douche'],
            ['id' => 17, 'name' => 'vial'],
        ]);
    }
}
