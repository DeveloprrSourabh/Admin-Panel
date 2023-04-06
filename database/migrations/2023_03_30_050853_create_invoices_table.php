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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
           $table->integer('invoicenum')->unique();
           $table->date('invoicedate');
           $table->date('duedate');
           $table->string('company');
           $table->string('billedto');
           $table->string('business');
           $table->string('adress');
           $table->integer('gstin');
           $table->integer('empl_id');
           $table->string('item');
           $table->integer('gstrate');
           $table->integer('rate');
           $table->integer('amount');
           $table->integer('quantity');

           $table->integer('igst');
           $table->integer('total');
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
        Schema::dropIfExists('invoices');
    }
};
