<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('elemento_id')->constrained('elementos')->onDelete('cascade');
            $table->timestamp('fecha_prestamo');
            $table->timestamp('fecha_devolucion')->nullable();
            $table->enum('estado', ['Reservado', 'Prestado', 'Devuelto', 'Cancelado']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('prestamos');
    }
};
