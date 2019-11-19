<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'post_id', 'user_id', 'text'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

}
