<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('major')->nullable()->change();
            $table->string('course')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Ensure no NULLs remain before making columns NOT NULL again
        DB::table('registrations')->whereNull('major')->update(['major' => '']);
        DB::table('registrations')->whereNull('course')->update(['course' => '']);

        Schema::table('registrations', function (Blueprint $table) {
            $table->string('major')->nullable(false)->change();
            $table->string('course')->nullable(false)->change();
        });
    }
};
