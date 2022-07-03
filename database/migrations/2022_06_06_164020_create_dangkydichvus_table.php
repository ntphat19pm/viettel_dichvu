<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangkydichvu', function (Blueprint $table) {
            $table->id();
            $table->string('mahd', 100)->unique();
            $table->foreignId('doanhnghiep_id')->constrained('doanhnghiep')->onDelete('cascade');;
            $table->foreignId('dichvu_id')->constrained('dichvu')->onDelete('cascade');;
            $table->double('soluong', 100);
            $table->double('thanhtien', 100);
            $table->timestamp('ngaydangky');
            $table->timestamp('ngayketthuc');
            $table->timestamp('ngaybao');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dangkydichvu');
    }
};
