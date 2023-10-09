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
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->tinyInteger('hidden')->default(1);
            $table->text('content');
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('post')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('id_major')->unsigned();
            $table->foreign('id_major')->references('id')->on('major')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
