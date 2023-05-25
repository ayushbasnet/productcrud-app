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
        Schema::create('newproducts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string("price");
            $table->string("quantity");
            $table->string("description", 30);
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newproducts');
    }
};
