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
        Schema::create('accion', function (Blueprint $table) {
            $table->increments('id_acc');
            $table->string('acc_fec_in')->nullable();
            $table->string('acc_hor_in')->nullable();
            $table->string('acc_fec_sa')->nullable();
            $table->string('acc_hor_sa')->nullable();
            $table->string('acc_concl')->nullable();
            $table->integer('id_est')->nullable()->index('fk_est');
            $table->string('acc_nota')->nullable();
            $table->integer('id_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accion');
    }
};
