<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscribe extends Model
{
    use Notifiable;
    //
    protected $table = "subscribe"; 
}
