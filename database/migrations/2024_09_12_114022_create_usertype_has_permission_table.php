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
        Schema::create('usertype_has_permission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usertype_id');
            $table->unsignedBigInteger('permission_type_id');
            $table->foreign('usertype_id')->references('id')
                ->on('usertype')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permission_type_id')->references('id')
                ->on('permission_type')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertype_has_permission');
    }
};
