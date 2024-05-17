<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('amount', 10, 2);            
            $table->date('due_date')->nullable();
            $table->boolean('recurrence')->nullable();
            $table->integer('installments')->nullable();
            $table->enum('status', ['active', 'paid'])->default('active');
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('payment_methods_id');
            $table->foreign('payment_methods')->references('id')->on('payment_methods_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('values');
    }
};
