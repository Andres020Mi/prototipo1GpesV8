<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // $table->foreignId('elemento_id')->constrained('elementos')->onDelete('cascade');
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("item_id")->constrained("items")->onDelete(("cascade"));
            $table->dateTime('loan_date')->nullable();
            $table->dateTime('return_date')->nullable();
            $table->enum("status",['Reservado', 'Prestado', 'Devuelto', 'Cancelado']);
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
        Schema::dropIfExists('loans');
    }
}
