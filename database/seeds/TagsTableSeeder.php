<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2019-02-08
 * Time: 15:10
 */

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 5)->create();
    }
}