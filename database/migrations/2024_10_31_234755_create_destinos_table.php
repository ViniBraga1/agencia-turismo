<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateDestinosTable extends Migration
{
public function up()
{
Schema::create('destinos', function (Blueprint $table){
$table->id();
$table->string('nome');
$table->text('descricao');
$table->decimal('preco', 8, 2);
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExists('destinos');
}
}
