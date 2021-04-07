<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid');
            $table->string('schoolname');
            $table->string('mangername');
            $table->string('mangerphone');
            $table->string('faniname')->nullable();
            $table->string('faniphone')->nullable();
            $table->string('edariname')->nullable();
            $table->string('edariphone')->nullable();
            $table->string('tolabiname')->nullable();
            $table->string('tolabiiphone')->nullable();
            $table->string('schooladdress');
            $table->string('schoolphone');
            $table->string('schoolstage')->default('المرحلة المتوسطة');
            $table->string('wesiteurl')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('gender');







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
        Schema::dropIfExists('schools');
    }
}
