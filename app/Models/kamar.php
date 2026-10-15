<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = "kamar";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['id','no_kamar','tipe_kamar'];
}
