<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->enum('status',['enable','disable']);
            $table->boolean('show');
        });
    }

  
    public function down(): void
    {
        
    }
};
