<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    //
    protected $fillable = ['user_id','title','tag','comment','time','status'];

    public function user()
    {
        return $this->belongsTo('App\user_id', 'user_id');
    }
}
