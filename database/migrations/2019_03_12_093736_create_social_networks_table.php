<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('social_networks', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('name', ['Facebook', 'Twitter', 'Linkedin', 'Pinterest', 'Youtube']);
            $table->timestamps();
        });

        Schema::create('user_social_networks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('social_network_id');
            $table->text('token')->nullable();
            $table->enum('status', ['active', 'inactive', 'expired'])->default('inactive');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('social_network_id')->references('id')->on('social_networks')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_social_networks');
        Schema::dropIfExists('social_networks');
    }
}
