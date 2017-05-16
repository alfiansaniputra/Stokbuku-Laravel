<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = false;
    public function penerbit()
    {
    	return $this->belongsTo('App\Penerbit');
    }
}
