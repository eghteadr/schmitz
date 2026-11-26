<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('reference_code', 32)->unique();
            $table->string('full_name');
            $table->string('company_name');
            $table->string('country');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('category');
            $table->string('quantity');
            $table->string('destination');
            $table->text('specifications');
            $table->text('message')->nullable();
            $table->string('attachment_path')->nullable();
            $table->string('locale', 5)->default('en');
            $table->string('status', 20)->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
