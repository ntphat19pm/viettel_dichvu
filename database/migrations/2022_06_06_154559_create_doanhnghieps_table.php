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
        Schema::create('doanhnghiep', function (Blueprint $table) {
            $table->id();
            $table->double('mst', 100)->unique();
            $table->double('matruong', 100)->unique();
            $table->string('tendoanhnghiep', 100)->unique();
            $table->string('diachi', 100);
            $table->string('nguoidaidien', 100);
            $table->string('sdt', 10);
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
        Schema::dropIfExists('doanhnghiep');
    }
};
