<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consultant extends Model
{
    //

    protected $fillable = [
        'name',
        'email',
        'bio',
        'image',


        ];
            protected $table = 'consultants';


}
