<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model {

    protected $table = 'messages';
    protected $fillable = array('name', 'email', 'message'); //поля в таблице которые можно изменять

    public function getCreatedAtAttribute($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H-i:s / d.m.Y');
    }

}
