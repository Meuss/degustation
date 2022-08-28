<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Countries;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->integer('position');
            $table->string('name');
            $table->string('cellar')->nullable();
            $table->string('region')->nullable();
            $table->enum('country', Countries::values())->default('FR')->nullable();
            $table->year('year')->nullable();
            $table->string('grape_variety')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
};
