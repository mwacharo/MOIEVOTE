<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('votes', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('user_id');
    //         $table->string('candidate_id');
    //         $table->timestamps();
    //     });
    // }
    public function up(): void
{
    Schema::create('votes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('candidate_id');
        $table->unsignedBigInteger('group_id');
        $table->boolean('status')->default(1); // 1 for cast vote, 0 for spoiled vote
        $table->timestamps();
        $table->softDeletes();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
        $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
