<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmission_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('surName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('email');
            $table->string('residArea');
            $table->string('phoneNumber');
            $table->string('state');
            $table->string('resultType');
            $table->string('jambScore');
            $table->string('gender');
            $table->string('sponsore');
            $table->MediumText('image');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('addmission_forms');
    }
}
