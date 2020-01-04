<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('gender');
            $table->boolean('job_name');
            $table->string('postal_code')->nullable(true);
            $table->string('address')->nullable(true);
            $table->date('birthday');
            $table->string('id_number');
            $table->string('phone');
            $table->string('type');
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
            $table->dropColumn('gender');
            $table->dropColumn('job_name');
            $table->dropColumn('postal_code');
            $table->dropColumn('address');
            $table->dropColumn('birthday');
            $table->dropColumn('id_number');
            $table->dropColumn('phone');
            $table->dropColumn('type');
        });
    }
}
