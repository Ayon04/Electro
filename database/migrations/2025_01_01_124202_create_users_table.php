<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
          //  $table->timestamps();
            $table->string('fullname',length:30)->nullable(false);
            $table->string('email',length:30)->nullable(false)->unique();
            $table->string('password',length:255)->nullable(value: false);
            $table->string('image')->nullable(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
