<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'phone','college','city','address','strength','course','department','why','how','contact','year','position'
    ];
}
