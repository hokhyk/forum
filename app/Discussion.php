<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [

        'title',
        'contenido',
        'user_id',
        'channel_id',
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
