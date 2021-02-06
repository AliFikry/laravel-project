<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\post;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('posts', function (Blueprint $table) {
          

            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('admin')->default("false")->nullable();
            $table->string('verification')->default(post::notVerified)->nullable();
            $table->string(post::generateVerificationToken());
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
        Schema::dropIfExists('posts');
    }
}
