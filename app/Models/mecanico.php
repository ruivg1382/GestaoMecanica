<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mecanico extends Model
{
    use HasFactory;

    public function rPhone(){

        return $this->hasOne(phone::class);
    }
}
