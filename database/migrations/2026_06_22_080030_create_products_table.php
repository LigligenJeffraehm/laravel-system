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
        Schema::create('products', function (Blueprint $table) {
            $table->id();//this is big integer
            $table->timestamps();//date created and date modified
            $table->string('productName', length: 200);
            $table->decimal('price', total: 8, places:2);
            $table->boolean('availability');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
/**
 * table is plural
 * controller singular
 * model is singular
 */