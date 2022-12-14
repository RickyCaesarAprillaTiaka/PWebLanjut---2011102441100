<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sp_gurus', function (Blueprint $table) {
            $table->id();
            $table->integer('guru_id');
            $table->integer('sp_id');
            $table->enum('status_tugas', [
                'induk',
                'non induk',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_gurus');
    }
}
