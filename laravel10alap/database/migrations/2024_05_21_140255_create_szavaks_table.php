<?php

use App\Models\szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });
        szavak::create(['angol'=>'giraffe','magyar'=>'zsiráf','temaId'=>1]) ;
        szavak::create(['angol'=>'rose','magyar'=>'rózsa','temaId'=>2]) ;
        szavak::create(['angol'=>'page','magyar'=>'oldal','temaId'=>3]) ;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
