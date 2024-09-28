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
        Schema::create('coffees', function (Blueprint $table) {
            $table->increments('id_coffee');
            $table->string('token_coffee', 30);
            $table->text('name', 150);
            $table->string('price');
            $table->integer('stock');
            $table->float('netto');
            $table->text('ingredients');
            $table->string('picture', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
