<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Tran;
use App\Models\Tag;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tag_tran', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tran::class);
            $table->foreignIdFor(Tag::class);
            $table->unique(['tag_id', 'tran_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_tran');
    }
};
