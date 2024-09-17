<?php

use App\Models\Books;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Books::create([
            'author' => 'Ady Endre',
            'title' => 'blabla',
            'pieces' => 20
        ]);

        Books::create([
            'author' => 'Kölcsey Ferenc',
            'title' => 'blablahaha',
            'pieces' => 25
        ]);

        Books::create([
            'author' => 'Hothy Miklós',
            'title' => 'blablahahaxd',
            'pieces' => 30
        ]);


        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
