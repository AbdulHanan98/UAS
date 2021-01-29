<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertaniansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produk');
            $table->string('bulan');
            $table->string('terakhir');
            $table->string('persentase');
            $table->string('perubahan');
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
        Schema::dropIfExists('pertanians');
    }
}
