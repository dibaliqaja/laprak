<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1 = new Category;
        $kategori1->name = "Sepatu";
        $kategori1->save();

        $kategori2 = new Category;
        $kategori2->name = "Tas";
        $kategori2->save();

        $kategori3 = new Category;
        $kategori3->name = "Elektronik";
        $kategori3->save();

        $kategori4 = new Category;
        $kategori4->name = "Kemeja";
        $kategori4->save();

        $kategori5 = new Category;
        $kategori5->name = "Celana";
        $kategori5->save();
    }
}
