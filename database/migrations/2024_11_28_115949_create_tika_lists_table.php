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
        Schema::create('tika_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('center_id')->constrained('centers');
            $table->date('scheduled_date');
            $table->string('status');
            $table->string('vaccine_number')->nullable();
            $table->string('vaccine_company')->nullable();
            $table->date('vaccinated_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tika_lists');
    }
};
