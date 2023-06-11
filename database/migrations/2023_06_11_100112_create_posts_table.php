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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->foreignId('admin_id')->constrained('admins', 'admin_id');
            $table->foreignId('category_id')->constrained('categories', 'category_id');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('status')->default('draft');
            $table->tinyInteger('comments_enabled')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
