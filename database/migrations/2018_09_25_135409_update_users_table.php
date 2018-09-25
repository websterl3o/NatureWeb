<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('tipo_user')->nullable()->after('name')->unsigned();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('tipo_user')->references('id')->on('tipo_usuario')->OnDelete('set null');
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
            $table->dropForeign('users_tipo_user_foreign');
            $table->dropColumn('tipo_user');
        });
    }
}
