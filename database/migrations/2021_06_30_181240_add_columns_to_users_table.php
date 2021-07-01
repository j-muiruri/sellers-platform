<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->after('email', function ($table) {
                $table->enum('gender', ['male', 'female']);
                $table->date('dob')->nullable();
                $table->bigInteger('phone')->nullable();
                $table->string('address', 100)->nullable();
                $table->enum('role', ['admin', 'seller'])->default('seller');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'dob', 'phone', 'address']);
        });
    }
}
