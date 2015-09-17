<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class ForumTopik extends Model
{
    //
	protected $primaryKey = 'id_topik';
	protected $table = 'tbl_forum_topik';
	public $timestamps = false;

	protected $fillable = [];
}
