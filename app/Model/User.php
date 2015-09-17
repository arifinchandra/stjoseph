<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
	protected $primaryKey = 'id';
	protected $table = 'tbl_user';
	public $timestamps = false;

	protected $fillable = [];
}
