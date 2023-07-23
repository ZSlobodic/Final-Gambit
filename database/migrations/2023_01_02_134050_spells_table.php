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
        Schema::create('spells', function (Blueprint $table)
        {
            $table->id();
            $table->string('spell_name', 200);
            $table->string('school', 200);
            $table->string('level', 200);
            $table->boolean('ritual');
            $table->string('casting_time', 200);
            $table->string('range', 200);
            $table->string('target', 200)->nullable();
            $table->boolean('somatic');
            $table->boolean('vocal');
            $table->boolean('material');
            $table->string('components', 500)->nullable();
            $table->boolean('concentration');
            $table->string('duration', 200);
            $table->longtext('description');
            $table->text('at_higher_levels')->nullable();
            $table->string('type', 200);
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
        Schema::dropIfExists('spells');
    }
};