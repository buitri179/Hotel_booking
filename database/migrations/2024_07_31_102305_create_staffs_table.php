<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 50);
            $table->unsignedBigInteger('department_id');
            $table->string('photo', 255)->nullable();
            $table->text('bio')->nullable();
            $table->string('salary_type', 50);
            $table->double('salary_amount');
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};
