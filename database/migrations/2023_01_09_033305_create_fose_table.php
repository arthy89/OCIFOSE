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
        Schema::create('fose', function (Blueprint $table) {
            $table->increments('id_fose');
            $table->string('fose_num_id')->nullable();
            $table->integer('id_ofi')->nullable();
            $table->string('fose_fec', 12)->nullable();
            $table->string('fose_hor', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fose');
    }
};
