<?php

use App\Models\BlogPostCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blog_post_categories', function (Blueprint $table) {
            $table->unsignedInteger('sort_order')->default(0)->after('title');
        });

        BlogPostCategory::query()->orderBy('id')->each(function (BlogPostCategory $category, int $index) {
            $category->update(['sort_order' => $index + 1]);
        });
    }

    public function down(): void
    {
        Schema::table('blog_post_categories', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });
    }
};
