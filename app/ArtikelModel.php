<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table = 'table_artikel';
    protected $fillable = ['judul','isi'];

    public function getSlugAttribute($slug)
    {
        return strtolower($slug);
    }
}
