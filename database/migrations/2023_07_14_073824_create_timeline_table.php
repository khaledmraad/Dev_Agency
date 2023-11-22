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
        Schema::create('timeline', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_email');
            $table->string('start_date');
            $table->string('duration');
            $table->string('project_name');
            $table->string('topic');
            $table->string('description');
            $table->string('sender_email');
            $table->string('done');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeline');
    }
};
