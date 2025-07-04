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
        Schema::create('what_we_do_pages', function (Blueprint $table) {
            $table->id();
            $table->string('img_url')->nullable();
            $table->string('short_title')->nullable();
            $table->longText('long_title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('content')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('what_we_do_pages');
    }
};
