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
        Schema::create('user_portals', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->foreignId('user_id')->nullable();
            $table->foreignId('portal_id')->nullable();
            $table->timestamps();
            $table->primary(['user_id', 'portal_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_portals');
    }
};
