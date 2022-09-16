<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => 'judul-post-pertama',
            "author" => "Imam Wahyu Sobirin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quas eveniet consequuntur soluta maxime beatae aut amet placeat facilis dignissimos minus nam, quis totam voluptatibus dolores a qui vero.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo voluptate libero eum impedit officiis inventore quae provident velit, sit perferendis vero cumque corporis. Porro dignissimos odit ullam, suscipit molestias facilis provident temporibus libero qui nihil at obcaecati, cupiditate aspernatur aliquam asperiores earum laudantium illo? Dolore adipisci aut dolores odit voluptatem eveniet placeat quo eos, numquam accusamus nostrum eius illum at aspernatur nobis ullam? Quibusdam, voluptates consequatur ut saepe ratione adipisci culpa, non et mollitia libero deserunt sunt voluptatum nemo omnis minima! Nesciunt porro, quia ipsa sed architecto pariatur non voluptate dolore et soluta praesentium, dolores harum quisquam maxime dicta. 
            Consequuntur facilis laborum labore hic, dolorem itaque numquam? Ad id iure reprehenderit velit repellat hic consectetur odio, ea, cumque incidunt tempore, minima voluptate? Laudantium dolorum, reprehenderit fugit fugiat iusto aliquid, debitis, quo obcaecati facere iste maiores saepe distinctio ut possimus voluptate delectus illum! Ipsa libero itaque eius incidunt saepe dolorem iste."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Sugianto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quas eveniet consequuntur soluta maxime beatae aut amet placeat facilis dignissimos minus nam, quis totam voluptatibus dolores a qui vero    dolorum sunt at, recusandae voluptatem sequi. Sit ducimus facere magnam culpa error eveniet.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo voluptate libero eum impedit officiis inventore quae provident velit, sit perferendis vero cumque corporis. Porro dignissimos odit ullam, suscipit molestias facilis provident temporibus libero qui nihil at obcaecati, cupiditate aspernatur aliquam asperiores earum laudantium illo? 
            Dolore adipisci aut dolores odit voluptatem eveniet placeat quo eos, numquam accusamus nostrum eius illum at aspernatur nobis ullam? Quibusdam, voluptates consequatur ut saepe ratione adipisci culpa, non et mollitia libero deserunt sunt voluptatum nemo omnis minima! Nesciunt porro, quia ipsa sed architecto pariatur non voluptate dolore et soluta praesentium, dolores harum quisquam maxime dicta. Consequuntur facilis laborum labore hic, dolorem itaque numquam? Ad id iure reprehenderit velit repellat hic consectetur odio, ea, cumque incidunt tempore, minima voluptate? Laudantium dolorum, reprehenderit fugit fugiat iusto aliquid, debitis, quo obcaecati facere iste maiores saepe distinctio ut possimus voluptate delectus illum! Ipsa libero itaque eius incidunt saepe dolorem iste."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }
}
