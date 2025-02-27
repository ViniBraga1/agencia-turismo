<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateReservasTable extends Migration
{
public function up()
{
Schema::create('reservas', function (Blueprint $table){
$table->id();
$table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
$table->foreignId('destino_id')->constrained('destinos')->onDelete('cascade');
$table->date('data_reserva');
$table->string('status')->default('pendente');
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExists('reservas');
}
}