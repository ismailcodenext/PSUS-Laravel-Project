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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('img_url');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->longText('description')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();
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
        Schema::dropIfExists('company_infos');
    }
};
