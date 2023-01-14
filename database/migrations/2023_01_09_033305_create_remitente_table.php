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
        Schema::create('remitente', function (Blueprint $table) {
            $table->increments('id_rem');
            $table->string('rem_name')->nullable();
            $table->string('rem_apell')->nullable();
            $table->string('rem_cel')->nullable();
            $table->string('rem_correo')->nullable();
            $table->string('rem_ofi_ent')->nullable();
            $table->string('rem_ofi_ent_det')->nullable();
            $table->string('rem_cargo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remitente');
    }
};
