<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Miftah Fadilah',
        //     'email' => 'miftahfadilah71@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Karung',
        //     'email' => 'Karung@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus. Ullam necessitatibus cumque perferendis distinctio iure perspiciatis nesciunt delectus laudantium omnis consequatur tempore, recusandae expedita cupiditate error consectetur voluptatem magnam adipisci. Optio omnis fugit fuga quae dolor tempora, quis adipisci illo voluptatum qui quibusdam totam magnam ea dicta doloremque cumque cum ipsam. Nihil neque, et ratione, saepe sit ex vitae ipsa sed necessitatibus aperiam, architecto suscipit? Ea adipisci ut possimus sunt? Sit magni sequi consequuntur temporibus ullam laboriosam provident earum velit odit, aliquam totam explicabo, atque incidunt illum quas aut nam error quae voluptate! Quos quasi aperiam, quia nam atque laborum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus. Ullam necessitatibus cumque perferendis distinctio iure perspiciatis nesciunt delectus laudantium omnis consequatur tempore, recusandae expedita cupiditate error consectetur voluptatem magnam adipisci. Optio omnis fugit fuga quae dolor tempora, quis adipisci illo voluptatum qui quibusdam totam magnam ea dicta doloremque cumque cum ipsam. Nihil neque, et ratione, saepe sit ex vitae ipsa sed necessitatibus aperiam, architecto suscipit? Ea adipisci ut possimus sunt? Sit magni sequi consequuntur temporibus ullam laboriosam provident earum velit odit, aliquam totam explicabo, atque incidunt illum quas aut nam error quae voluptate! Quos quasi aperiam, quia nam atque laborum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus. Ullam necessitatibus cumque perferendis distinctio iure perspiciatis nesciunt delectus laudantium omnis consequatur tempore, recusandae expedita cupiditate error consectetur voluptatem magnam adipisci. Optio omnis fugit fuga quae dolor tempora, quis adipisci illo voluptatum qui quibusdam totam magnam ea dicta doloremque cumque cum ipsam. Nihil neque, et ratione, saepe sit ex vitae ipsa sed necessitatibus aperiam, architecto suscipit? Ea adipisci ut possimus sunt? Sit magni sequi consequuntur temporibus ullam laboriosam provident earum velit odit, aliquam totam explicabo, atque incidunt illum quas aut nam error quae voluptate! Quos quasi aperiam, quia nam atque laborum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur harum tempore facere, ea id at deleniti iste sunt incidunt aut dolor libero voluptates assumenda illum vero exercitationem possimus. Ullam necessitatibus cumque perferendis distinctio iure perspiciatis nesciunt delectus laudantium omnis consequatur tempore, recusandae expedita cupiditate error consectetur voluptatem magnam adipisci. Optio omnis fugit fuga quae dolor tempora, quis adipisci illo voluptatum qui quibusdam totam magnam ea dicta doloremque cumque cum ipsam. Nihil neque, et ratione, saepe sit ex vitae ipsa sed necessitatibus aperiam, architecto suscipit? Ea adipisci ut possimus sunt? Sit magni sequi consequuntur temporibus ullam laboriosam provident earum velit odit, aliquam totam explicabo, atque incidunt illum quas aut nam error quae voluptate! Quos quasi aperiam, quia nam atque laborum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
