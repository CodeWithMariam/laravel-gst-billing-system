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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique(); // Unique invoice number
            $table->date('invoice_date'); // Invoice date
            $table->string('full_name'); // Client's full name
            $table->text('address'); // Client's address
            $table->string('phone_no', 15); // Client's phone number
            $table->text('item_description'); // Description of items
            $table->decimal('total_amount', 10, 2); // Total invoice amount
            $table->string('account_no')->nullable(); // Bank account number
            $table->string('account_holder_name')->nullable(); // Account holder's name
            $table->string('bank_name')->nullable(); // Bank name
            $table->text('branch_address')->nullable(); // Bank branch address
            $table->string('ifsc_code')->nullable(); // IFSC code
            $table->unsignedBigInteger('party_id'); // Foreign key reference (if applicable)
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('company_details');
    }
};
