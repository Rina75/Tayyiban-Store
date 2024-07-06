<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Hujan",
            "slug" => "hujan",
            "author" => "Rina",
            "body" => "Velit ex anim ad esse quis consequat sint tempor duis nulla. 
Incididunt voluptate reprehenderit veniam eiusmod et do aliqua ut 
nulla do anim qui. Veniam labore excepteur nisi reprehenderit eiusmod velit elit. 
Ad nulla ipsum sint amet eu minim nisi do ex dolor occaecat elit non. Anim est culpa ut ullamco anim nisi laborum. 
Cupidatat aliquip ea nostrud occaecat do id ex et nulla amet ipsum tempor. Do consequat velit deserunt proident
non est sit aliqua anim pariatur ex laboris veniam ea."
        ],
        [
            "title" => "Rasa",
            "slug" => "rasa",
            "author" => "Chanyeol",
            "body" => "Occaecat consectetur excepteur aute proident cupidatat. Nisi velit proident enim non aute ad exercitation tempor quis aute magna laboris laborum. Esse id quis nisi ad laboris exercitation qui pariatur aliqua. Enim ex ad sunt ipsum tempor nostrud cupidatat tempor nulla dolor esse est id. Et irure est deserunt incididunt duis voluptate cupidatat pariatur quis ad minim occaecat aliquip. Dolor ipsum quis culpa sunt commodo id non occaecat.
Eiusmod proident ipsum laborum veniam fugiat elit minim sint deserunt Lorem consectetur. Consectetur do labore cillum est. Labore reprehenderit pariatur sunt veniam labore ad ex ut nostrud duis irure consequat. Laboris et magna sint ad cillum reprehenderit ipsum nisi commodo in. Eiusmod voluptate enim quis qui ullamco magna minim magna anim exercitation eu. Elit nulla minim exercitation sit irure anim qui commodo cupidatat adipisicing reprehenderit et aliquip.
Adipisicing ullamco anim cupidatat sint sunt aute elit fugiat enim consequat ipsum. Dolore non qui elit cillum minim minim eu consequat. Deserunt dolore laborum irure proident consequat exercitation. Deserunt reprehenderit veniam ipsum ullamco. Ad cillum voluptate quis mollit nostrud aliqua ipsum. Aliqua tempor cupidatat nulla laborum commodo velit nisi ipsum mollit occaecat eiusmod.
Ullamco aliquip exercitation ut cupidatat quis occaecat non aute ad nulla culpa laboris nulla anim. Id magna dolor sit aliqua eu officia quis Lorem. Lorem voluptate nisi nulla cillum eu commodo consectetur cillum id sit."
        ]
    ];

    public static function all()
    {
        return  collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        /* $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        } */
        return $posts->firstwhere('slug', $slug);
    }
}
