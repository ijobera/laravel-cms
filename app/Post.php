<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if ( ! is_null ($this->img))
        {
            $imagePath = public_path() . "/img/" . $this->img;
            if (file_exists($imagePath)) $imageUrl = asset("img/" . $this->img);
        }

        return $imageUrl;
    }
}
