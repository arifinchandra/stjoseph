<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class ForumJenisPengumuman extends Model
{
    //
	protected $primaryKey = 'id_jns_pengumuman';
	protected $table = 'tbl_jenis_pengumuman';
	public $timestamps = false;

	protected $fillable = [];
}
