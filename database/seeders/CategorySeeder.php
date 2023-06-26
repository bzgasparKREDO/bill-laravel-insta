<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'=> 'Travel',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
            [
                'name'=> 'Food',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
            [
                'name'=> 'Lifestyle',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
            [
                'name'=> 'Music',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
            [
                'name'=> 'Career',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
            [
                'name'=> 'Movie',
                'created_at'=> NOW(),
                'updated_at'=> NOW(),
            ],
        ];
        $this->category->insert($categories);
    }
}
