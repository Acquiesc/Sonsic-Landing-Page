<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToNewsletterSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newsletter_signups', function (Blueprint $table) {
            $table->string('first')->after('id');
            $table->string('last')->after('first');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newsletter_signups', function (Blueprint $table) {
            $table->dropCOlumn('first');
            $table->dropColumn('last');
        });
    }
}
