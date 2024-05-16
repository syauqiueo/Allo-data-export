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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('environment');
            $table->string('problem_category');
            $table->string('summary');
            $table->string('zentao_link');
            $table->string('priority');
            $table->string('status');
            $table->string('pending_reason');
            $table->string('target_version');
            $table->string('impact_analyst');
            $table->string('rootcause');
            $table->string('workaround');
            $table->string('reporter');
            $table->string('assignee');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
