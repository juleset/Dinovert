<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppropriateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appropriate', function (Blueprint $table) {
            $table->foreignId('id_tag')->constrained();
            $table->foreignId('id_article')->constrained();
            $table->primary(['id_tag', 'id_article']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appropriate');
    }
}
