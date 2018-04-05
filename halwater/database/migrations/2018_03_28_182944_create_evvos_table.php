<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evvos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raw_data',100);
            $table->float('rssi');
            $table->float('snr');
            $table->integer('sequence_number');
            $table->string('device_id',30);
            $table->string('device_name',30);
            $table->string('battery_status',30);
            $table->float('use_case');
            $table->float('battery_voltage');
            $table->float('application_id');
            $table->float('voltage_1');
            $table->float('voltage_2');
            $table->float('pulse');
            $table->float('current_1');
            $table->float('current_2');
            $table->string('current_1_status');
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
        Schema::dropIfExists('evvos');
    }
}
