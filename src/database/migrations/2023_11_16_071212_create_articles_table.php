<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('body');
            $table->integer('status');
            // 2038年問題を考慮してtimestampは使用しない
            $table->dateTime('created_at')
                ->nullable()
                ->default(Date::now());
            $table->dateTime('updated_at')
                ->nullable()
                ->default(Date::now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
