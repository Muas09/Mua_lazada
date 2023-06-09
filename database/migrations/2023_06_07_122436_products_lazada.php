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
        Schema::create('Products_lazada',function (Blueprint $table) {
                $table->increments('id');
                $table->string('image')->nullable();
                $table->string('name');
                $table->decimal('price', 8, 2);
                $table->boolean('show_ower')->default(false);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products_lazada');
    }
};
