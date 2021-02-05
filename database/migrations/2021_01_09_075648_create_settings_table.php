<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->unsigned()->nullable()->comment('Language Number To Choose a display language from table const_languages');
            $table->string('site_name')->comment('add title to home website');
            $table->text('site_desc')->comment('add meta description to home website (this summarizes the page’s content. Search engines often use it for the snippet in search results.)');
            $table->string('logo')->nullable()->comment('add logo for the website header');
            $table->string('icon')->nullable()->comment('add icon for website in tabs');
            $table->string('copyright')->comment('add Copyright license website footer');
            $table->string('email')->nullable()->comment('email company for contacts');
            $table->string('meta_keyword')->nullable()->comment('add meta tags(keyword) to home website');
            $table->string('meta_robots')->nullable()->comment('The meta robots tag tells search engines if and how they should crawl your web pages');
            $table->text('Maintenance_message')->nullable()->comment('They appear when they are activated, are used when there is website maintenance and do not want them to appear to customers');
            $table->string('phone')->comment('phone number the company for contacts');
            $table->enum('maintenance_status',['open','close'])->comment('Maintenance status to close or open');
            $table->string('facebook')->nullable()->comment('facebook link the company for contacts');
            $table->string('twitter')->nullable()->comment('twitter link the company for contacts');
            $table->string('instagram')->nullable()->comment('instagram link the company for contacts');
            $table->string('whatsapp')->nullable()->comment('whatsapp nummber the company for contacts');
            $table->integer('user_id')->unsigned()->nullable()->comment('Add User Id from table users');
            $table->timestamps();
        });

        Schema::table('settings', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
