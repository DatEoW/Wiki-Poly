<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('title',255);
            $table->string('summarize',255)->nullable();
            $table->text('content');
            $table->string('slug',255);
            $table->string('img',255)->nullable();
            $table->tinyInteger('hot')->default(1);
            $table->tinyInteger('hidden')->default(1);
            $table->integer('views')->default(0);
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('id_major')->unsigned()->nullable();
            $table->foreign('id_major')->references('id')->on('major')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('id_major_child')->unsigned()->nullable();
            $table->foreign('id_major_child')->references('id')->on('major_child')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('id_cate')->unsigned();
            $table->foreign('id_cate')->references('id')->on('categories')->onUpdate('cascade')->onDelete('restrict');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
