<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class Bacaan extends Model
{
    //
	protected $primaryKey = 'id_bacaan';
	protected $table = 'tbl_bacaan';
	public $timestamps = false;

	protected $fillable = [];
}
