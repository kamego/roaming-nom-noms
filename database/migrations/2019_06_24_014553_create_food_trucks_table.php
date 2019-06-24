<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('logo_url')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->text('blurb')->nullable();
            $table->text('description')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->datetime('twitter_updated_at')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->string('facebook_handle')->nullable();
            $table->string('website_url')->nullable();
            $table->string('menu_url')->nullable();
            $table->string('menu_file_url')->nullable();
            $table->boolean('is_caterer')->nullable();
            $table->boolean('is_active')->default(1);
            $table->datetime('established_at')->nullable();
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
        Schema::dropIfExists('food_trucks');
    }
}
