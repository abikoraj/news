<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRashifalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rashifals', function (Blueprint $table) {
            $table->id();
            $table->text('mesh');
            $table->text('brish');
            $table->text('mithun');
            $table->text('karkat');
            $table->text('singha');
            $table->text('kanya');
            $table->text('tula');
            $table->text('brischik');
            $table->text('dhanu');
            $table->text('makar');
            $table->text('kumbha');
            $table->text('min');
            $table->integer('date');
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
        Schema::dropIfExists('rashifals');
    }
}
