<?php

namespace stjo\Http\Controllers;

use Illuminate\Http\Request;
use stjo\Http\Requests;
use stjo\Http\Controllers\Controller;
use stjo\Model\ForumPost;
use stjo\Model\Pengumuman;

class PagesController extends Controller
{
    //
	public function index() {
		$pengumumanTerbaru=Pengumuman::all()->groupBy('tgl_pengumuman')->reverse()->take(2)->toArray();
		$forum = ForumPost::all()->take(3)->toArray();

		return view('home', ['pengumuman' => $pengumumanTerbaru, 'forum'=>$forum]);
	}
}
