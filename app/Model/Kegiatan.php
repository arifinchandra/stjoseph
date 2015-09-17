<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
	protected $primaryKey = 'id_kegiatan';
	protected $table = 'tbl_kegiatan';
	public $timestamps = false;

	protected $fillable = [];
}
