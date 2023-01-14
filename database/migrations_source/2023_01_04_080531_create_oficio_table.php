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
        Schema::create('oficio', function (Blueprint $table) {
            $table->increments('id_ofi');
            $table->string('ofi_fec')->nullable();
            $table->string('ofi_dir')->nullable();
            $table->string('ofi_asu')->nullable();
            $table->integer('id_repo')->nullable();
            $table->string('inf_body')->nullable();
            $table->integer('id_inf')->nullable();
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
        Schema::dropIfExists('oficio');
    }
};
