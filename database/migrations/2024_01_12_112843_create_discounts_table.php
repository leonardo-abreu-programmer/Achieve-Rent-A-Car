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
    Schema::create('discounts', function (Blueprint $table) {
      $table->id();
      $table->text('text');
      $table->text('texto');
      $table->string('text_color');
      $table->string('color');
      $table->boolean('active')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('discounts');
  }
};
