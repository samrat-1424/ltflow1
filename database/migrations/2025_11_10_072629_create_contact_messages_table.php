<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up() 
{
    Schema::create('contact_messages', function (Blueprint $table) {                                                                                                 //bluprint is method and $table is used to define the structure of the table.
        $table->id();
        $table->string('full_name');
        $table->string('mobile');
        $table->string('email');
        $table->string('company');
        $table->text('message');
        $table->timestamps();
    }); 
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
