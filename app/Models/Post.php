<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function allDestinasi()
    {
        return [
            [
                'title' => 'Acropolis',
                'location' => 'Yunani',
                'image' => 'https://images.unsplash.com/photo-1504608524841-42fe6f032b4b'
            ],
            [
                'title' => 'Shibuya',
                'location' => 'Jepang',
                'image' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24'
            ],
            [
                'title' => 'Giza',
                'location' => 'Mesir',
                'image' => 'https://images.unsplash.com/photo-1505731132163-1b1a3c2d7f6c'
            ],
            [
                'title' => 'Garuda Wisnu Kencana',
                'location' => 'Bali, Indonesia',
                'image' => 'https://images.unsplash.com/photo-1612444539558-9eecf4a2c53a'
            ],
            [
                'title' => 'Huayana Picchu',
                'location' => 'Peru',
                'image' => 'https://images.unsplash.com/photo-1508264165352-258859e62245'
            ],
            [
                'title' => 'Niagara Falls',
                'location' => 'Kanada',
                'image' => 'https://images.unsplash.com/photo-1561484930-998a35b56e7b'
            ]
        ];
    }
}
