<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->foreignId('cid')->unsigned();
            $table->string('kind',191);
            $table->double('lockup')->unsigned();
            $table->double('highest')->unsigned();
            $table->double('lowest')->unsigned();
            $table->date('publish');
            $table->timestamps();
            $table->foreign('cid')->references('id')->on('chains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
}
