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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('type',150);
            $table->unsignedBigInteger('surface');
            $table->unsignedBigInteger('place');
            $table->unsignedBigInteger('etage');
            $table->unsignedBigInteger('prix');
            $table->string('image');
            $table->text('description');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('auths')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
