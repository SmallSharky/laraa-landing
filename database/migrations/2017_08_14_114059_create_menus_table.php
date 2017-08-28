<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->json('who_can_see')->nullable();
            $table->string('text')->nullable();
        });
        Schema::create('menu_items', function (Blueprint $table) {
            //['ref', 'who_can_see', 'name', 'submenu_id', 'text']
            $table->increments('id');
            $table->timestamps();
            $table->string('ref')->default('none');
            $table->json('who_can_see')->nullable();
            $table->string('text')->nullable();
            $table->unsignedInteger('submenu_id')->nullable();
            $table->string('name')->nullable();
            $table->foreign('submenu_id')->references('id')->on('menu')->onDelete('cascade');
        });
        Schema::create('menu_links', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('menu_id');
            $table->unsignedInteger('item_id');
            $table->string('text')->nullable();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('menu_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
