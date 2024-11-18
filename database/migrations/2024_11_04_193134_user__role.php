<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Creación de la tabla 'custom_users'
        Schema::create('custom_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->constrained('people');
            $table->string('username', 50)->unique(); // Agregar unique si quieres que los nombres de usuario sean únicos
            $table->text('password'); // Usamos text para contraseñas más seguras
            $table->string('email', 100)->unique(); // Agregar unique si quieres que el correo sea único
            $table->string('recovery_email', 100)->nullable();
            $table->string('recovery_token', 255)->nullable();
            $table->timestamp('token_expiration')->nullable();
            $table->timestamp('registration_date')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps(); // Crea 'created_at' y 'updated_at'
        });

        // Creación de la tabla 'user_role'
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('custom_users');
            $table->foreignId('role_id')->constrained('roles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('custom_users');
        Schema::dropIfExists('user_role');
    }
};
