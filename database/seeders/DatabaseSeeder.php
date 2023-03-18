<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Fawwaz Ka',
            'username' => 'faw',
            'email' => 'a@gmail.com',
            'password' => bcrypt('12321'),
        ]);
        // User::create([
        //     'name' => 'Kautsar Fa',
        //     'email' => 'kautsar@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        // Post::factory(5)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere, fugiat voluptas qui architecto repellendus officia maiores ad ratione quod minus exercitationem, atque repellat fuga tenetur aperiam sapiente. Placeat incidunt aperiam voluptatem fuga excepturi iure, et id, consequatur laborum facilis, alias debitis enim aliquid ullam numquam consectetur? Laboriosam quisquam vitae ipsa quod dolor, corporis repudiandae, exercitationem accusamus placeat temporibus tempore iure? Quis, consectetur rerum earum rem corporis quae necessitatibus laudantium laborum. Beatae, voluptatem rerum. Explicabo ad sequi, dolorum, suscipit qui expedita esse soluta ea magnam, accusamus corporis placeat dolor eum repudiandae eligendi asperiores!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere, fugiat voluptas qui architecto repellendus officia maiores ad ratione quod minus exercitationem, atque repellat fuga tenetur aperiam sapiente. Placeat incidunt aperiam voluptatem fuga excepturi iure, et id, consequatur laborum facilis, alias debitis enim aliquid ullam numquam consectetur? Laboriosam quisquam vitae ipsa quod dolor, corporis repudiandae, exercitationem accusamus placeat temporibus tempore iure? Quis, consectetur rerum earum rem corporis quae necessitatibus laudantium laborum. Beatae, voluptatem rerum. Explicabo ad sequi, dolorum, suscipit qui expedita esse soluta ea magnam, accusamus corporis placeat dolor eum repudiandae eligendi asperiores!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere, fugiat voluptas qui architecto repellendus officia maiores ad ratione quod minus exercitationem, atque repellat fuga tenetur aperiam sapiente. Placeat incidunt aperiam voluptatem fuga excepturi iure, et id, consequatur laborum facilis, alias debitis enim aliquid ullam numquam consectetur? Laboriosam quisquam vitae ipsa quod dolor, corporis repudiandae, exercitationem accusamus placeat temporibus tempore iure? Quis, consectetur rerum earum rem corporis quae necessitatibus laudantium laborum. Beatae, voluptatem rerum. Explicabo ad sequi, dolorum, suscipit qui expedita esse soluta ea magnam, accusamus corporis placeat dolor eum repudiandae eligendi asperiores!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus excepturi, mollitia odit nisi quas quam velit facere, fugiat voluptas qui architecto repellendus officia maiores ad ratione quod minus exercitationem, atque repellat fuga tenetur aperiam sapiente. Placeat incidunt aperiam voluptatem fuga excepturi iure, et id, consequatur laborum facilis, alias debitis enim aliquid ullam numquam consectetur? Laboriosam quisquam vitae ipsa quod dolor, corporis repudiandae, exercitationem accusamus placeat temporibus tempore iure? Quis, consectetur rerum earum rem corporis quae necessitatibus laudantium laborum. Beatae, voluptatem rerum. Explicabo ad sequi, dolorum, suscipit qui expedita esse soluta ea magnam, accusamus corporis placeat dolor eum repudiandae eligendi asperiores!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
