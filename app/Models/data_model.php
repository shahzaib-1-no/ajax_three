<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_model extends Model
{
    use HasFactory;
    public $table= 'data';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
