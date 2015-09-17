<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
	protected $primaryKey = 'id_berita';
	protected $table = 'tbl_berita';
	public $timestamps = false;

	protected $fillable = [];
}
