<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->comment('Имя пользователя');
            $table->text('wishes')->comment('Пожелании пользователя при регистрации');
            $table->text('email')->comment('Элекронная почта пользователя');
            $table->text('phone')->comment('Телефон номер пользователя');
            $table->text('status')->comment('0 - НаРассмотрении, 1 - Принят, 2 - Отклонен');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_booking');
    }
}
