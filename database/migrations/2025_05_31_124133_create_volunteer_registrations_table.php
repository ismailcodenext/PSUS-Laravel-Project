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
        Schema::create('volunteer_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('password')->nullable();
            $table->string('confirm_password')->nullable();
            $table->string('gender')->nullable();
            $table->string('village')->nullable();
            $table->string('union')->nullable();
            $table->string('upazilla')->nullable();
            $table->string('district')->nullable();
            $table->string('present_address')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('job_description')->nullable();
            $table->string('past_volunteering_experience')->nullable();
            $table->string('curricular_activities')->nullable();
            $table->string('nid_birth_certificate')->nullable();
            $table->string('photo')->nullable();
            $table->string('humanitarian_activities')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_registrations');
    }
};
