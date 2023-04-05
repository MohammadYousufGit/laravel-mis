<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->increments('id');
             $table->string('beneficiary_name');
             $table->string('father_name');
             $table->string('gender');
             $table->integer('id_number')->unique();
             $table->integer('personal_mobile_number');
             $table->integer('family_mobile_number');
             $table->integer('age');
             $table->string('province');
             $table->string('district');
             $table->string('village');
             $table->string('head_of_the_village_council_name');
             $table->string('head_of_the_village_council_mobile_number');
             $table->string('project');
             $table->text('type_of_assistant_receiving_from_coar_office');
             $table->date('beneficiary_date');
             $table->text('beneficiary_documents');
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
        Schema::dropIfExists('beneficiaries');
    }
}
