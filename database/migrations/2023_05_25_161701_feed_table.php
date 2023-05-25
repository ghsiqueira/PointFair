<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FeedTable extends Migration
{
    public function up()
    {
        Schema::create('feed', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feed');
    }
}