<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $user = User::factory()->create([
//            'name' => 'Mohamed Ahmed'
//        ]);
        Post::factory(20)->create();

//        User::truncate();
//        Category::truncate();
//        Post::truncate();
//
//        $user = User::factory(1)->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        $hobby = Category::create([
//            'name' => 'Hobby',
//            'slug' => 'hobby'
//        ]);
//
//        Post::create([
//            'user_id' => $user[0]->id,
//           'category_id' => $personal->id,
//           'title' => 'My First Post',
//           'slug' => 'my-first-post',
//           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user[0]->id,
//            'category_id' => $work->id,
//            'title' => 'My Second Post',
//            'slug' => 'my-second-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user[0]->id,
//            'category_id' => $hobby->id,
//            'title' => 'My Third Post',
//            'slug' => 'my-third-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores itaque libero modi nemo odit perferendis vel? Aspernatur assumenda, cupiditate dicta, dolorem error eveniet hic inventore molestiae numquam officia, quidem voluptate? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
