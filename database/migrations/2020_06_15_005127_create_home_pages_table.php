<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('contact_title') -> nullable();
            $table->string('contact_num') -> nullable();
            $table->string('logo') -> nullable();
            $table->string('top_banner') -> nullable();
            $table->string('top_banner_switch') -> nullable();
            $table->string('facebook') -> nullable();
            $table->string('twitter') -> nullable();
            $table->string('linkedin') -> nullable();
            $table->string('google-plus') -> nullable();
            $table->string('instagram') -> nullable();
            $table->string('footer_text') -> nullable();
            $table->string('newsletter_title') -> nullable();
            $table->string('newsletter_desc') -> nullable();
            $table->string('newsletter_bg') -> nullable();
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
        Schema::dropIfExists('home_pages');
    }
}
