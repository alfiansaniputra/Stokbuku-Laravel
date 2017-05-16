<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stokbuku extends Model
{
    protected $table = 'stok_buku';
    
    public function Buku ()
	{
    	
    	return $this->belongsTo('App\Buku');
    }
    
    public function penerbit()
    {
    	return $this->belongsTo('App\Penerbit');
    }

}