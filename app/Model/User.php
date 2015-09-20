<?php

namespace stjo\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
	protected $primaryKey = 'id';
	protected $table = 'tbl_user';
	public $timestamps = false;

	protected $fillable = [
		'username',
		'password',
		'email',
		'alamat',
		'kota',
		'kode_pos',
		'user_level',
		'kunjungan_terakhir',
		'jumlah_post',
		'id_umat',
		'path_gambar',
	];

	//Relationship
	//user bisa saja umat bisa saja tidak

	//user memiliki banyak forum post
	public function forumPost(){
		$this->hasMany('stjo\Model\ForumPost', 'id_user','id');
	}

}
