<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    // $tprotected $table = 'gambar';
    protected $fillable = ['deskripsi', 'foto'];
}