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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->from(12589);
            $table->string('product_name')->nullable();
            $table->integer('product_price')->nullable();

            // $table->unsignedBigInteger('category_id')->nullable();
            // $table->foreign('category_id')->references('id')->on('categories');


            //  restrict BYDEFAULT  &&  Cascade   &&  set NULL
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->restrictOnDelete();
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->onDelete('cascade');
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->cascadeOnDelete();
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->onDelete('set Null');
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->nullOnDelete();

            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->restrictOnUpdate();
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->onUpdate('cascade');
            // $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->cascadeOnUpdate();


            $table->timestamps();
            $table->timestamp('reviewed_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::createDatabase('ahmedStore007');
        Schema::dropIfExists('products');
    }
};
