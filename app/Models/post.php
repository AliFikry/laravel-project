<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'verification',
        'verificationToken'

    ];
    protected $admin = [
        'admin' => 0,
    ];
    // public function isAdmin()
    // {
    //     return $this->admin=post::admin;
    // }
    // public function isVerified()
    // {
    //     return $this->verified=post::admin;
    // }

}
