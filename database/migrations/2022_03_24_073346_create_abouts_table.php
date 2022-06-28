<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('welcome_uz')->nullable();
            $table->text('welcome_ru')->nullable();
            $table->text('welcome_en')->nullable();
            $table->text('company_uz')->nullable();
            $table->text('company_ru')->nullable();
            $table->text('company_en')->nullable();
            $table->text('team_uz')->nullable();
            $table->text('team_ru')->nullable();
            $table->text('team_en')->nullable();
            $table->text('testimonial_uz')->nullable();
            $table->text('testimonial_ru')->nullable();
            $table->text('testimonial_en')->nullable();
            $table->string('img')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
