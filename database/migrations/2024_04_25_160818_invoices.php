<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            
            $table->id();
            $table->integer('seller_id');
            $table->integer('transaction_id');
            $table->string('paid_status');
            $table->integer('amount')->nullable();
            $table->timestamps();
        });
    }
    
   
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
