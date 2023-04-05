<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStakeholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('s_no');
            $table->string('stakeholder_name');
            $table->string('agency');
            $table->string('gender');
            $table->integer('id_number');
            $table->integer('personal_mobile_number');
            $table->integer('family_mobile_number');
            $table->integer('age');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->string('project');
            $table->string('role_in_the_project');
            $table->date('data_contaced');
            $table->string('feedback');
            $table->string('remarks');
            $table->text('stakeholder_documents');
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
        Schema::dropIfExists('stakeholders');
    }
}
