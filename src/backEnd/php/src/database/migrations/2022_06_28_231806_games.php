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
        /**
         * Games should be stored in a persistent storage. The loose game schema is:
        - publisher (string, required)
        - name (string, required)
        - nickname (string, can be null)
        - rating (pick whatever you want, this can be numerical, or an enumeration like “favorite”,
        “meh”, “dislike”… whatever you like, can be null)
         */
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publish_id');
            $table->string('name');
            $table->string("nickname")->nullable();
            $table->integer("sum_rating")->nullable();
            $table->dateTime('created_at');
            $table->dateTime("updated_at")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
