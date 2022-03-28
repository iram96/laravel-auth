<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0;$i < 4; $i++ ){
            $post = new Post();
            $post->title = $faker->sentence();
            $post->post_content = $faker->paragraphs( 2, false);
            $post->image = $faker->imageurl(150, 150);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
