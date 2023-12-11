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
            $table->integer('new_asset_id')->unsigned()->nullable();
            $table->integer('asset_maintenance_id')->unsigned()->nullable();
            $table->string('rma_number')->nullable();
            $table->string('case_number')->nullable();
            $table->integer('with_admin')->default(0);
            $table->integer('warranty_expired')->default(0);
            $table->string('repair_cost')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('technician');
            $table->string('status')->nullable()->default("Pending");
            $table->longtext('notes');
            $table->date('start_date');
            $table->date('completion_date')->nullable();
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
