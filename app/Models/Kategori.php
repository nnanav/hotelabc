<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table= 'foto_buku';

    protected $fillable= [
        'buku_id','foto'
    ];

    public function buku(){
        return $this->hasMany('App\Models\Buku');
    }
}
