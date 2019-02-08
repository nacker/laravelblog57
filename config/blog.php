<?php
/**
 * Created by PhpStorm.
 * User: nacker
 * Date: 2019-02-08
 * Time: 06:44
 */
return [
    'name' => "My Blog",
    'title' => 'My Blog',
    'subtitle' => '我的博客',
    'description' => 'Laravel的博客',
    'author' => 'nacker',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email' => env('MAIL_FROM_ADDRESS')
];