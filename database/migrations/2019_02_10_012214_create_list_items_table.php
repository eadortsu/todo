<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('tag')->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('time');
            $table->enum('status',['0','1'])->default('0'); //0 for unchecked item and 1 for checked item
            $table->enum('starred',['0','1'])->default('0'); //0 for not starred item and 1 for starred item
            $table->enum('priority',['0','1'])->default('0'); //0 for not priority item and 1 for priority item
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
        Schema::dropIfExists('list_items');
    }
}
