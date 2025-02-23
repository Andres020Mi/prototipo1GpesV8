<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('elemento_id')->constrained('elementos')->onDelete('cascade');
            $table->text('descripcion');
            $table->timestamp('fecha');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('reportes');
    }
};
