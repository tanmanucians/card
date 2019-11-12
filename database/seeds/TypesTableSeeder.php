<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::truncate();
        Type::create(['name' => 'TypePicture']);
        Type::create(['name' => 'TypeWord']);
        Type::create(['name' => 'TypePictureWord']);
    }
}
