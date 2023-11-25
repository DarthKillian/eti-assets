<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->string('rma_number');
            $table->string('case_number');
            $table->integer('user_id')->unsigned();
            $table->integer('manufacturer_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('technician');
            $table->string('status');
            $table->longtext('notes');
            $table->date('start_date');
            $table->date('completion_date');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rma');
    }
}
