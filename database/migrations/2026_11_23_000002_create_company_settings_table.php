<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->string('legal_name')->default('SCHMITZ MAKİNA SAN. İÇ VE DIŞ TİC. LTD. ŞTİ.');
            $table->string('country')->default('Republic of Türkiye');
            $table->string('registered_address')->default('[Insert verified registered address]');
            $table->string('mersis_number')->default('[Insert verified information]');
            $table->string('email_info')->default('info@schmitzglobal.com');
            $table->string('email_trade')->default('trade@schmitzglobal.com');
            $table->string('email_sourcing')->default('sourcing@schmitzglobal.com');
            $table->string('email_logistics')->default('logistics@schmitzglobal.com');
            $table->string('email_accounts')->default('accounts@schmitzglobal.com');
            $table->string('phone_number')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('rfq_notification_email')->default('trade@schmitzglobal.com');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
