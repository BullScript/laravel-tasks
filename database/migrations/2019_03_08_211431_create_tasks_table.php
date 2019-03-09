<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sprint_id');
            $table->foreign('sprint_id')->references('id')->on('sprints');
            $table->unsignedBigInteger('parent_task_id')->nullable();
            $table->foreign('parent_task_id')->references('id')->on('tasks');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('task_type_id');
            $table->foreign('task_type_id')->references('id')->on('task_types');
            $table->unsignedBigInteger('task_priority_type_id');
            $table->foreign('task_priority_type_id')->references('id')->on('task_priority_types');
            $table->unsignedBigInteger('task_status_type_id');
            $table->foreign('task_status_type_id')->references('id')->on('task_status_types');
            $table->unsignedBigInteger('assignee_id')->nullable();
            $table->foreign('assignee_id')->references('id')->on('users');
            $table->unsignedBigInteger('developer_id')->nullable();
            $table->foreign('developer_id')->references('id')->on('users');
            $table->unsignedBigInteger('qa_id')->nullable();
            $table->foreign('qa_id')->references('id')->on('users');
            $table->integer('story_points')->default(0);
            $table->time('estimated_time')->default(0);
            $table->time('spend_time')->default(0);
            $table->json('extra_data')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
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
        Schema::dropIfExists('tasks');
    }
}
