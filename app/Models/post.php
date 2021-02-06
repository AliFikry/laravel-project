<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    const admin = 'true';
    const notAdmin = 'false';
    const verified ='true';
    const notVerified='false';
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'verification',
        'verificationToken'

    ];
    public function isAdmin()
    {
        return $this->admin=post::admin;
    }
    public function isVerified()
    {
        return $this->verified=post::admin;
    }
    public static function generateVerificationToken(){
        return rand();
    }
}

