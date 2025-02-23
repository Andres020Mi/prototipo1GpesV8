<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->enum('tipo', ['Consumible', 'No Consumible']);
            $table->string('ubicacion', 255);
            $table->enum('estado', ['Disponible', 'Prestado', 'Dañado']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('elementos');
    }
};
