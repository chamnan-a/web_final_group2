<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicedescriptionsTable extends Migration
{
    
    /* Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('invoice_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices');
            $table->foreignId('product_id')->constrained('products');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    
     /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoicedescriptions');
    }
}