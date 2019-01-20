<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_id';
    protected $fillable = array(
        'name',
        'user_id',
        'article',
        'image',
        'tag_id'
    );

    public static function insert($insert){
        DB::table('article')->insert($insert);
    }
}
