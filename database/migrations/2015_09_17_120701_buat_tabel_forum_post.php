<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelForumPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_forum_post', function (Blueprint $table) {
            $table->mediumInteger('id_post',true,true);
            $table->dateTime('wkt_kirim');
            $table->mediumInteger('id_user',false,true);
            $table->mediumInteger('id_forum_kategori',false,true);
            $table->mediumInteger('id_forum_topik',false,true);
            $table->string('jdl_post');
            $table->longText('isi_post');
            $table->dateTime('waktu_review');
            $table->mediumInteger('id_reviewer',false,true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_forum_post');
    }
}
