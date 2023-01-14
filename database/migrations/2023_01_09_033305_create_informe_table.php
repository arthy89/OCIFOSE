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
        Schema::create('informe', function (Blueprint $table) {
            $table->increments('id_inf');
            $table->string('inf_name')->nullable();
            $table->string('inf_ori')->nullable();
            $table->string('inf_obj_g')->nullable();
            $table->string('inf_obj_e')->nullable();
            $table->string('inf_alc')->nullable();
            $table->string('inf_sit_adv')->nullable();
            $table->string('inf_cncl')->nullable();
            $table->string('inf_rec')->nullable();
            $table->integer('id_user')->nullable();
            $table->string('inf_arch')->nullable();
            $table->integer('id_rr')->nullable();
            $table->integer('inf_num')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe');
    }
};
