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
        Schema::create('requests', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('meeting_title'); // Meeting title
            $table->string('meeting_room'); // Meeting room name
            $table->date('meeting_date'); // Meeting date
            $table->string('meeting_time'); // Meeting time (e.g., "10:30 AM")
            $table->enum('program', [
                'bpa', 'bpubad', 'bsbio', 'bsenv',
                'bsess', 'bsmath', 'bssw'
            ]); // Program options
            $table->text('notes')->nullable(); // Additional notes
            $table->json('files')->nullable(); // JSON to store file paths for uploaded files
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};

