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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('name',255);
            $table->string('img',255)->nullable();
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('address',255)->nullable();
            $table->string('phone',13)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('role')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
