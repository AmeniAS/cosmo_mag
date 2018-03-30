<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloggers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email', 191)->unique();
            $table->string('password');

            $table->date('birthdate');
            $table->string('phone');
            $table->string('address');
            $table->string('image');

            $table->string('code');
            $table->string('points');

            $table->string('referer_code')->nullable();
            $table->string('referer_type')->nullable();

            $table->string('facebook');
            $table->string('youtube');
            $table->string('instagram');

            $table->rememberToken();
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
        Schema::dropIfExists('bloggers');
    }
}
