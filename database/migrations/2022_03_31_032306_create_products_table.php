<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 320);
            $table->string('manufacturer', 100)->nullable();
            $table->string('material', 100);
            $table->decimal('weight', 5, 2)->nullable();
            $table->string('article', 100)->nullable();
            $table->decimal('cost', 9, 2)->nullable();
            $table->longText('description');
            $table->string('image_url');
            $table->timestamps();

            $table->foreignId('category_id')
                ->constrained('category_objects')
                ->onDelete('cascade');

            // $table->foreignId('image_id')
            //     ->constrained('image_uploads')
            //     ->onDelete('cascade');

            // $table->foreignId('color_id')
            //     ->constrained('colors')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
