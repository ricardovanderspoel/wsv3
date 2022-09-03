<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('vat')->nullable();
            $table->string('iban')->nullable();
            $table->string('bic')->nullable();
            $table->string('subscription_type')->nullable();
            $table->datetime('subscription_expiry')->nullable();
            $table->string('stripe_customer_id')->nullable();
            
            $table->unsignedBigInteger('owner_user_id');
            $table->foreign('owner_user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('companies');
    }
}
