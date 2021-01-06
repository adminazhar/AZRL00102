<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->date('dob')->nullable();
            $table->text('address_param1')->nullable();
            $table->string('address_param2')->nullable();
            $table->string('address_param3')->nullable();
            $table->string('address_param4')->nullable();
            $table->string('unsubscribed_from')->nullable();
            $table->string('imported_from')->default('APP');
            $table->unsignedInteger('active')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
