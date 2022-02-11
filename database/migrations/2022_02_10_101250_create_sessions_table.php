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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('student_id');
            $table->string('title');
            $table->date('date');
            $table->time('time', $precision = 0);
            $table->unsignedInteger('venue_type');
            $table->string('venue');
            $table->unsignedInteger('examiner_id');
            $table->string('proposal_title');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};
