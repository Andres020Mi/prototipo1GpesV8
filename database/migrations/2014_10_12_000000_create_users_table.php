<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // bigIncrements en lugar de uuid
            $table->string('nombre', 100);
            $table->string('correo', 100)->unique();
            $table->string('contrasena', 255);
            $table->enum('rol', ['Administrador', 'Prestamista', 'Prestatario', 'Cuentadante']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
};
