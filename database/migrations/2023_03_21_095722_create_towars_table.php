<?php

namespace Database\Seeders;

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
        Schema::create('towars', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('picture');
            $table->text('title');
            $table->text('compound');
            $table->text('country');
            $table->text('view');
            $table->text('taste');
            $table->string('price');
            $table->unsignedInteger('count')->default(0);
            $table->string('category_id');
            $table->string('slug');
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
        Schema::dropIfExists('towars');
    }
};
