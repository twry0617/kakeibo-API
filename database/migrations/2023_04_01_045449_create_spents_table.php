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
        Schema::create('spents', function (Blueprint $table) {
            $table->id();
            $table->integer("spent_amount")->default(0)->comment('支出金額');
            $table->string('remarks')->comment('備考');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('spent_categories_id')->constrained('spent_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spents');
    }
};
