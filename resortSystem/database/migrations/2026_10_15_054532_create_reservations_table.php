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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id("reservation_id");
            $table->integer("user_id")->foreign()->references("id")->on("users");
            $table->integer("accommodation_id")->foreign()->references("id")->on("accommodations");
            $table->dateTime("check_in_date");
            $table->dateTime("check_out_date");
            $table->float("total_price", [10, 2]);
            $table->enum("status", ["pending", "confirmed", "cancelled"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
