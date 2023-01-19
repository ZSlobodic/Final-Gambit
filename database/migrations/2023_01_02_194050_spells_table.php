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
        Schema::create('Spells', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('spell_name', 20);
            $table->string('school', 20);
            $table->string('level', 20);
            $table->boolean('ritual');
            $table->string('casting_time', 20);
            $table->string('range', 20);
            $table->string('target', 20);
            $table->boolean('somatic');
            $table->boolean('vocal');
            $table->boolean('material');
            $table->string('components', 30);
            $table->boolean('concentration');
            $table->string('duration', 20);
            $table->longtext('description');
            $table->text('at_higher_levels');
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
        Schema::dropIfExists('Spells');
    }
};