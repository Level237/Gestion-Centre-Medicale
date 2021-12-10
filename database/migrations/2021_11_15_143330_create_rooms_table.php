<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')
            ->references('id')
            ->on('personnels')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            Schema::disableForeignKeyConstraints();

            $table->string('name');
            $table->string('type');
            $table->string('libellé')->unique();
            $table->text('description');
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
        Schema::dropIfExists('rooms');
    }
}
