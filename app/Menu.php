<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =['id','client_id', 'picturePath','logoPath','defaultLang'];

}