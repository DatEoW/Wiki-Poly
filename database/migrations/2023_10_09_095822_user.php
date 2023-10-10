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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('name',50);
            $table->string('img',100)->nullable();
            $table->string('email',100)->nullable()->unique();
            $table->string('password',100);
            $table->string('address',100)->nullable();
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
