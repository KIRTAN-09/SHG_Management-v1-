<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('number')->nullable();
            $table->string('village');
            $table->string('group');
            $table->string('caste');
            $table->decimal('share_price', 10, 2);
            $table->integer('share_quantity')->default(1);
            $table->enum('member_type', ['President', 'Secretary', 'Member']);
            $table->string('member_id')->unique();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
