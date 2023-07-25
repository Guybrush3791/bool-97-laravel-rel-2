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
        Schema::table('user_details', function (Blueprint $table) {

            $table -> unsignedBigInteger('user_id');

            $table -> foreign('user_id')
                   -> references('id')
                   -> on('users');
        });

        Schema::table('posts', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained();
        });
        Schema::table('role_user', function (Blueprint $table) {

            $table -> foreignId('role_id') -> constrained();
            $table -> foreignId('user_id') -> constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {

            $table -> dropForeign('user_details_user_id_foreign');

            $table -> dropColumn('user_id');
        });

        Schema::table('posts', function (Blueprint $table) {

            $table -> dropForeign('posts_user_id_foreign');

            $table -> dropColumn('user_id');
        });
        Schema::table('role_user', function (Blueprint $table) {

            $table -> dropForeign('role_user_role_id_foreign');
            $table -> dropForeign('role_user_user_id_foreign');

            $table -> dropColumn('role_id');
            $table -> dropColumn('user_id');
        });
    }
};
