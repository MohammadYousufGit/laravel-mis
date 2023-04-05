<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('project_code');
            $table->text('project_goal');
            $table->text('project_objectives');
            $table->string('project_donor');
            $table->string('project_location');
            $table->integer('total_number_of_families');
            $table->integer('total_number_of_beneficiaries');
            $table->date('project_start_date');
            $table->date('project_end_date');
            $table->boolean('project_status');
            $table->string('project_budget_holder');
            $table->integer('p_technical_staff_male');
            $table->integer('p_technical_staff_female');
            $table->integer('p_support_staff_male');
            $table->integer('p_support_staff_female');


            $table->string('main_sector');
            $table->string('sub_sector')->nullable();


            $table->integer('p_budget');
            $table->string('p_budget_currency');
            $table->integer('p_budget_in_usd');

            $table->integer('p_idp_male');
            $table->integer('p_idp_female');
            $table->integer('p_idp_girls');
            $table->integer('p_idp_boys');

            $table->integer('p_ret_male');
            $table->integer('p_ret_female');
            $table->integer('p_ret_girls');
            $table->integer('p_ret_boys');




            $table->integer('p_ref_male');
            $table->integer('p_ref_female');
            $table->integer('p_ref_girls');
            $table->integer('p_ref_boys');

            $table->integer('p_host_community_male');
            $table->integer('p_host_community_female');
            $table->integer('p_host_community_girls');
            $table->integer('p_host_community_boys');







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
        Schema::dropIfExists('projects');
    }
}
