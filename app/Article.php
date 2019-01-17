<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body'];

    public function toArray()
    {
        $array = parent::toArray();

        $arrayAuthor = [
            'name' => 'Jessie',
            'link' => 'http://sfsdfsdf.com',
        ];

        $array['author'] = $arrayAuthor;

        return $array;

    }
}
