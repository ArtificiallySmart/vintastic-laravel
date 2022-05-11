<?php

use App\Models\Category;
use App\Models\Subcategory;
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
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->text('short')->nullable();
            $table->foreignIdFor(Category::class)->constrained();
            $table->foreignIdFor(Subcategory::class)->constrained();
            $table->string('thumbnail');
            $table->string('designer')->nullable();
            $table->string('brand')->nullable();
            $table->string('style')->nullable();
            $table->string('period')->nullable();
            $table->string('state')->nullable();
            $table->integer('stock');
            $table->integer('price');
            $table->softDeletes();
            $table->timestamps();
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
