<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluation extends Model
{
    protected $fillable =['id','order_id', 'questionpool_id','client_id','evaluationValue','comment'];
}
