<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnQuestionFromAssessment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('questions');
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->longText('questions')->after('assessment_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('questions');
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->string('questions')->after('assessment_name');
        });
    }
}
