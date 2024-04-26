<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
           
            $table->string("Nombre");
            $table->string('Apellido');
            $table->string('Nombre_Completo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Direccion');
            $table->string('Ciudad');
            $table->string('Estado');
            //creamos el campor para albergar la llave foranea
            $table->unsignedBigInteger('coche_id')->unique();
           

            $table->foreign('coche_id')
                ->references('id')
                ->on('coches')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
