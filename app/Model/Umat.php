<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class Umat extends Model
{
    //
	protected $primaryKey = 'id_umat';
	protected $table = 'tbl_umat';
	public $timestamps = false;

	protected $fillable = [];
}
