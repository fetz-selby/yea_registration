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
        Schema::create('client_registration_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('ghana_card');
            $table->date('date_of_birth');
            $table->string('email')->nullable();
            $table->string('residential_address');
            $table->string('gps_address');
            $table->string('community');
            $table->string('region');
            $table->string('district');
            $table->string('level_of_education');
            $table->string('next_of_kin');
            $table->string('next_of_kin_phone_number');
            $table->string('momo_network');
            $table->string('momo_number');
            $table->string('module');
            $table->string('module_question')->default('N/A');
            $table->string('module_number')->default('N/A');
            $table->string('aggreement')->nullable()->default('yes');
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
        Schema::dropIfExists('client_registration_details');
    }
};
