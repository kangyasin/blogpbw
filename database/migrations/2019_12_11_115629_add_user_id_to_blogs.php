<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToBlogs extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('blogs', function (Blueprint $table) {
        $table->bigInteger('user_id')->nullable()->unsigned()->after('id');
        $table->foreign('user_id')->references('id')->on('users');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('blogs', function (Blueprint $table) {
        $table->dropForeign('blogs_user_id_foreign');
        $table->dropColumn('user_id');
      });
  }
}
