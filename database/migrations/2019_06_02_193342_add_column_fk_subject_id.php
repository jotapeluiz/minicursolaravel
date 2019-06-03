<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFkSubjectId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->bigInteger('subject_id')->unsigned();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
