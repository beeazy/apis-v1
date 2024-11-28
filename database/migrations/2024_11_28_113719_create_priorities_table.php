<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name') -> unique();
            $table->string('color');
            $table->timestamps();
        });

        DB::table('priorities')->insert([
            ['name' => 'Low', 'color' => '#3490dc', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Medium', 'color' => '#38c172', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'High', 'color' => '#f6993f', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }
};
