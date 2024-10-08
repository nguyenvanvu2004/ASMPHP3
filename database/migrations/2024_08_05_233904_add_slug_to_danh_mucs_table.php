<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToDanhmucsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('danh_mucs', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name'); // Add the slug column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('danh_mucs', function (Blueprint $table) {
            $table->dropColumn('slug'); // Remove the slug column if rolling back
        });
    }
}
