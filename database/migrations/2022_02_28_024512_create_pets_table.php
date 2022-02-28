<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('birth_date');
            $table->string('gender', 6);

            $table->unsignedDecimal('weight', 6, 3); // in kg
            $table->unsignedDecimal('height', 6, 3); // in cm

            $table->date('next_visit')->nullable();
            $table->string('medical_history_url', 200)->nullable();
            $table->string('img_url', 200)->nullable();
            $table->timestamps();

            $table->foreignId('owner_id')->nullable()->constrained('users'); // if null -> not adopted
            $table->foreignId('species_id')->constrained('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
