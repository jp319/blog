<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        /**
         * Manual Way of seeding examples.
         */
//        $user = User::factory()->create();
//        $Personal = Category::create([
//           'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//        $Work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        $Family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $Family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-Post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque blanditiis consequatur delectus deleniti dolores enim error, esse explicabo fuga harum ipsum molestiae perferendis quae sapiente unde velit voluptate, voluptatem!</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $Work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-Post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque blanditiis consequatur delectus deleniti dolores enim error, esse explicabo fuga harum ipsum molestiae perferendis quae sapiente unde velit voluptate, voluptatem!</p>'
//        ]);
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
