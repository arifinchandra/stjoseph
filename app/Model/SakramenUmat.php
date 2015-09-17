<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class SakramenUmat extends Model
{
    //
	protected $primaryKey = 'id_sakramen_umat';
	protected $table = 'tbl_sakramen_umat';
	public $timestamps = false;

	protected $fillable = [];
}
