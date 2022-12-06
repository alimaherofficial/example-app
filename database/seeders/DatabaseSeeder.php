<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::truncate();
        // User::truncate();
        // Category::truncate();



        $user = \App\Models\User::factory()->create([
            'name' => 'Ali Maher',

        ]);
        $user = Post::factory(5)->create([
            'user_id'=> $user->id
        ]);
        // $sUser = \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test2@example.com',
        // ]);
        // $tUser = \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test3@example.com',
        // ]);

        // $personal = Category::create([
        //     'name' => 'personal',
        //     'slug' => 'personal',
        // ]);
        // $work = Category::create([
        //     'name' => 'work',
        //     'slug' => 'work',
        // ]);
        // $play = Category::create([
        //     'name' => 'play',
        //     'slug' => 'play',
        // ]);

        // Post::create([
        //     'category_id' => $personal->id,
        //     'user_id' => $fUser->id,
        //     'title' => 'the first post',
        //     'slug' => 'the-first-post',
        //     'expert' => 'the first post expert',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci mi, porta vel dignissim et, pulvinar ac massa. Phasellus convallis erat a porttitor sollicitudin. Vestibulum finibus massa id felis suscipit, eu accumsan mi dignissim. Aenean quis diam ut odio commodo bibendum egestas vitae velit. In congue, eros eget tincidunt rutrum, nulla risus auctor orci, sed sagittis velit purus sed sapien. Nam ornare massa diam, sed facilisis ipsum volutpat vitae. Sed in lacus finibus, maximus dolor in, ultrices nisl. Quisque nec justo tellus. Phasellus justo elit, porttitor et magna ac, lacinia bibendum eros. Donec at sapien purus. Vestibulum arcu diam, commodo.',
        // ]);
        // Post::create([
        //     'category_id' => $work->id,
        //     'user_id' => $sUser->id,
        //     'title' => 'the second post',
        //     'slug' => 'the-second-post',
        //     'expert' => 'the second post expert',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci mi, porta vel dignissim et, pulvinar ac massa. Phasellus convallis erat a porttitor sollicitudin. Vestibulum finibus massa id felis suscipit, eu accumsan mi dignissim. Aenean quis diam ut odio commodo bibendum egestas vitae velit. In congue, eros eget tincidunt rutrum, nulla risus auctor orci, sed sagittis velit purus sed sapien. Nam ornare massa diam, sed facilisis ipsum volutpat vitae. Sed in lacus finibus, maximus dolor in, ultrices nisl. Quisque nec justo tellus. Phasellus justo elit, porttitor et magna ac, lacinia bibendum eros. Donec at sapien purus. Vestibulum arcu diam, commodo.',
        // ]);
        // Post::create([
        //     'category_id' => $play->id,
        //     'user_id' => $tUser->id,
        //     'title' => 'the third post',
        //     'slug' => 'the-third-post',
        //     'expert' => 'the third post expert',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci mi, porta vel dignissim et, pulvinar ac massa. Phasellus convallis erat a porttitor sollicitudin. Vestibulum finibus massa id felis suscipit, eu accumsan mi dignissim. Aenean quis diam ut odio commodo bibendum egestas vitae velit. In congue, eros eget tincidunt rutrum, nulla risus auctor orci, sed sagittis velit purus sed sapien. Nam ornare massa diam, sed facilisis ipsum volutpat vitae. Sed in lacus finibus, maximus dolor in, ultrices nisl. Quisque nec justo tellus. Phasellus justo elit, porttitor et magna ac, lacinia bibendum eros. Donec at sapien purus. Vestibulum arcu diam, commodo.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
