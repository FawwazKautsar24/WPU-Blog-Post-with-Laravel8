<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fawwaz K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae temporibus dolorem adipisci voluptatum dicta minima quam laudantium officia iste, dolores pariatur at ducimus quasi? A, molestiae. Quo non ea similique id, iusto sint voluptate molestias cumque velit dolore deserunt aut nam nulla dolorem odio nostrum qui blanditiis, odit illo facilis commodi sit iure? Vero pariatur, perferendis esse quae facere magnam suscipit adipisci animi excepturi nobis hic, enim sunt impedit. Obcaecati quia voluptas asperiores dolor alias eveniet minima, ut nulla corporis?.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kautsar F",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, distinctio voluptate. Nemo, facilis nostrum, accusantium illum exercitationem ratione fugiat velit quam voluptatem praesentium porro debitis qui aliquid quisquam fugit commodi earum temporibus fuga ad quae eius numquam omnis. Totam accusamus impedit unde debitis quod, est dicta earum fugit eos sequi! Debitis, consequatur quasi suscipit amet alias est tempore? Iure hic quidem pariatur, voluptas ipsum illo dolores quos non! Debitis tempore voluptatibus sequi odit atque libero vel nesciunt perspiciatis corrupti ad, nostrum ut deleniti fugit ipsam. Reiciendis, esse porro beatae suscipit, quam cum est aut dolor quidem eius nisi soluta aspernatur.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if($p['slug'] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
