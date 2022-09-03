<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
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
            $table->string('stripe_invoice_id')->nullable();
            $table->string('stripe_payment_intent_id')->nullable();
            $table->datetime('invoice_date')->nullable();
            $table->datetime('invoice_due_date')->nullable();
            $table->string('invoice_status')->nullable();
            $table->float('invoice_total')->nullable();
            $table->float('invoice_paid')->nullable();
            $table->float('invoice_balance')->nullable();
            $table->text('invoice_notes')->nullable();
            $table->text('invoice_terms')->nullable();
            $table->text('invoice_footer')->nullable();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
}
