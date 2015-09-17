<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class ForumKategori extends Model
{
    //
	protected $primaryKey = 'id_kategori';
	protected $table = 'tbl_forum_kategori';
	public $timestamps = false;

	protected $fillable = [];
}
