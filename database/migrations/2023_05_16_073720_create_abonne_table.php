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
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',50);
            $table->string('prenom');
            $table->integer('age');
            $table->char('sexe',1)->default('F');
            $table->string('profession', 50);
            $table->string('rue',50);
            $table->string('code_postal', 30);
            $table->string('ville',50);
            $table->string('pays',100);
            $table->string('telephone',20)->nullable();
            $table->string('email',100)->nullable();
            $table->unsignedInteger('id_motivation');
            $table->foreign('id_motivation')->references('id')->on('motivation')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonne');
    }
};
