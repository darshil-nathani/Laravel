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
        Schema::table('myblogs', function (Blueprint $table) {
            // $table->string('city',255)->unique();
            // $table->dropColumn('city');
            // $table->string('city',255)->change();
            // Schema::rename('myblogs', 'mytable' );
            // Schema::dropIfExists('myblogs');
            //$table->foreign('_id')->references('id')->on('table');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('myblogs', function (Blueprint $table) {
            //
        });
    }
};
