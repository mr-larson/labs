<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("h2");
            $table->string("day");
            $table->string("h3");
            $table->text("p1")->nullable();
            $table->text("p2")->nullable();
            $table->text("p3")->nullable();
            $table->string("img");
            $table->foreignId('user_id')->constrained('users')->onDelete("cascade")->onUpdate("cascade");
            /* $table->boolean('confirmed'); */
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
        Schema::dropIfExists('articles');
    }
}
