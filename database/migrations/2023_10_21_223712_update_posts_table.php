<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->longText('short_description')->nullable();
            $table->json('item_details')->nullable();
            $table->string('file_upload')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('image_gallery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('short_description');
            $table->dropColumn('item_details');
            $table->dropColumn('file_upload');
            $table->dropColumn('featured_image');
            $table->dropColumn('image_gallery');

        });
    }
};
