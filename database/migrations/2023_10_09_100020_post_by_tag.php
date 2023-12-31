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
        Schema::create('post_by_tag', function (Blueprint $table) {


            $table->timestamps();
            $table->integer('id_post')->unsigned();
            $table->integer('id_tag')->unsigned();
            $table->primary(['id_post', 'id_tag']);
            $table->foreign('id_post')->references('id')->on('post')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('id_tag')->references('id')->on('tag')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_by_tag');
    }
};
