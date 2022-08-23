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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('academic');
            $table->string('session');
            $table->string('alloted_category');
            $table->string('voucher_type');
            $table->integer('voucher_no');
            $table->string('roll_no');
            $table->string('admno/uniqid');
            $table->string('status');
            $table->string('fee_category');
            $table->string('faculty');
            $table->string('program');
            $table->string('department');
            $table->string('batch');
            $table->integer('receipt_no');
            $table->string('fee_head');
            $table->integer('due_amount');
            $table->integer('paid_amount');
            $table->integer('conccession_amount');
            $table->integer('scholarship_amount');
            $table->integer('reverse_concession');
            $table->integer('write_off');
            $table->integer('adjusted_amount');
            $table->integer('refund_amount');
            $table->integer('fund_fransfer_amount');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
