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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('contenu');
            $table->string('post_img');
            $table->string('author');
            $table->date('date_pub');
            $table->string('video')->nullable();
            $table->unsignedBigInteger('section_id')->default(1);
            $table->timestamps();

            // Clé étrangère vers la table 'sections'
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
