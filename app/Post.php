<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public static function getPost() {
        $results = DB::select('select * from posts');
        return $results;
    }
}
