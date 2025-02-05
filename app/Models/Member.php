<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'photo', 'name', 'number', 'village', 'group', 'caste', 'share_price', 'share_quantity', 'member_type', 'member_id'
    ];
}
