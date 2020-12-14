<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WinkPost extends \Wink\WinkPost
{
    use HasFactory;


    public function  next($uuid)
    {
        $id = $this->where('id', '<', $uuid)->max('id');
        return $this->where('id', $id)->first(['title', 'slug', 'id']);
    }

    public function previous($uuid)
    {
        $id = $this->where('id', '>', $uuid)->min('id');
        return $this->where('id', $id)->first(['title', 'slug', 'id']);
    }
}
