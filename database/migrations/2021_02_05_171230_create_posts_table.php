<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\post;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePostsTable extends Migration
{
    public  static function generateVerificationToken()
    {
        return rand();
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
       
        Schema::create('posts', function (Blueprint $table) {
          
            $admin = 'true';
            $notAdmin = 'false';
            $verified ='true';
            $notVerified='false';

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('admin');
            $table->integer('verification')->default(0)->nullable();
           
            $table->string('verificationToken')->nullable()->unique();
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
