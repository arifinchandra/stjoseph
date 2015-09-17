<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    //
	protected $primaryKey = 'id_post';
	protected $table = 'tbl_forum_post';
	public $timestamps = false;
}
