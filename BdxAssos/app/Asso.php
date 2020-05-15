<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asso extends Model
{
    protected $fillable = [
        'titre', 'url_image', 'description', 'lieu', 'url_site'
    ];

    protected $attributes = [
        'url_image' => 'http://placeimg.com/640/480/animals',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
