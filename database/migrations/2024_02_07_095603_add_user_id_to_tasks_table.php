<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Add a new column to the tasks table
            // The new column will be called user_id and it will be an unsignedBigInteger
            $table->unsignedBigInteger('user_id')->after('id');
            //specify that the user_id column is a foreign key that references the id column of the users table
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Drop the foreign key user_id in the tasks table
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
