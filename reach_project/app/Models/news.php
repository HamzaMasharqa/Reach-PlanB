<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public $table = 'news';
    public $timestamps = false;
    use HasFactory;
}
