<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Miftah Fadilah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ab debitis hic ratione deserunt quasi fugiat rerum eius quis asperiores vero magni est inventore quidem, perferendis sunt voluptatem laudantium! At labore repellat perspiciatis quidem dolorem corporis porro necessitatibus. Fugiat iusto ipsum quas dolorum in, illo quam debitis harum, explicabo laboriosam quasi, quos dolorem quo sapiente? Quibusdam voluptate tenetur corrupti pariatur! Expedita ratione dolor, quia eaque explicabo qui nihil facilis doloremque, dolore eveniet nulla ex odit? Saepe animi nihil ut ex?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Karung",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quaerat consectetur ad possimus perferendis non dolores in placeat neque laborum quae sunt voluptatibus nostrum ut, vel sit, harum ab libero odit, doloribus expedita? Sequi a doloribus, molestiae velit perspiciatis quas quisquam rem eaque quae voluptatibus exercitationem quis. Doloribus explicabo exercitationem ut deleniti, voluptate voluptas optio? Repellat saepe deserunt corrupti fugiat alias mollitia maiores repellendus commodi, voluptate ab totam id distinctio laudantium delectus recusandae possimus explicabo quidem deleniti ea illo dolorem tempora tempore soluta debitis. Consequuntur, facilis error ab minus molestiae et non accusantium veritatis, laudantium suscipit hic obcaecati eos. Iusto."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
