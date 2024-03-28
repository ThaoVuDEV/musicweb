<?php

use App\Models\Album;
use App\Models\Artist;
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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->comment('Tiêu đề');
            $table->string('artist')->nullable()->comment('Tên nghệ sĩ');
            $table->string('album')->nullable()->comment('Tên album');
            $table->string('genre')->nullable()->comment('Thể loại bài hát');
            $table->string('file_path')->nullable()->comment('Đường dẫn file nhạc');
            $table->integer('duration')->nullable()->comment('Thời lượng của bài hát');
            $table->foreignId('artist_id')->index()->comment('ID nghệ sĩ')->constrained('artists');
            $table->foreignId('album_id')->index()->comment('Album ID')->nullable()->constrained('albums')->onDelete('set null');
            
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
