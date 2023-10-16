<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('last_name')->nullable();
            $table->string('img')->nullable();
            $table->string('words')->nullable();
            $table->string('sentence')->nullable();
            $table->text('paragraph')->nullable();
            $table->string('human_w')->nullable();
            $table->string('non_human_word')->nullable();
            $table->integer('nums')->nullable();
            $table->timestamp('this_year')->nullable();
            $table->timestamp('this_Month')->nullable();
            $table->text('emoji')->nullable();
            $table->foreignId('project_id')->nullable()->constrained('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
