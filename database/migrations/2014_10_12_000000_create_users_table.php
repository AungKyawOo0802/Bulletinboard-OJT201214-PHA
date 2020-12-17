<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('password');
            $table->string('profile');
            $table->string('type', 1);
            $table->string('phone', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->date('dob')->nullable();
            $table->string('create_user_id', 45);
            $table->string('updated_user_id', 45);
            $table->string('deleted_user_id', 45)->nullable();

            $table->unique(["name"], 'name_UNIQUE');

            $table->unique(["email"], 'email_UNIQUE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
