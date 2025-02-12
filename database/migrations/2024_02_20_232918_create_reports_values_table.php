<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reports_values', function (Blueprint $table) {
            $table->id(); 
            $table->enum('status', ['active', 'paid', 'late'])->default('active');
            $table->integer('value_id');
            $table->foreign('value_id')->references('id')->on('values')->onDelete('cascade');
            $table->integer('report_id');
            $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_values');
    }
};
