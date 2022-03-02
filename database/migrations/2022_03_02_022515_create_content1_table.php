<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContent1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content', function (Blueprint $table) {
            $table->id();
            $table->string('name_content');
            $table->string('order_content');
            $table->string('nama_link2')->nullable();
            $table->string('url_content2')->nullable();
            $table->string('nama_link')->nullable();
            $table->string('icon_content');
            $table->longText('description_content')->nullable();
            $table->string('url_content')->nullable();
            $table->boolean('kategori')->default(0);
            $table->boolean('status')->default(1);

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
        Schema::table('content', function (Blueprint $table) {
            //
        });
    }
}
