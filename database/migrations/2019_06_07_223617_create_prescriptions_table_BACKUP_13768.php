<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
<<<<<<< HEAD
            // $table->integer('item_id')->unsigned();
            // $table->foreign('item_id')->references('id')->on('inventries')->onDelete('cascade');
=======
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('inventories')->onDelete('cascade');
>>>>>>> 62d75dd97f0f539e5bcf3b08121128bf708441db
            $table->integer('quantity');
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
        Schema::dropIfExists('prescriptions');
    }
}