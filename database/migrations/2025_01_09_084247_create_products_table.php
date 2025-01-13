
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 255)->nullable(false); 
            $table->string('sku', 255)->unique()->nullable(false); 
            $table->string('slug', 255)->unique()->nullable(false); 
            $table->string('type', 255)->nullable(false); 
            $table->text('description')->nullable(false);
            $table->string('image')->nullable(); 
            $table->string('brand')->nullable(false);
            $table->decimal('price', 8, 2)->nullable(false); 
            $table->integer('stock_count')->nullable(false); 
            $table->string('stock_status')->nullable(false); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
