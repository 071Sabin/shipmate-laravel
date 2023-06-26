<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class seller extends Authenticatable
{
    use HasFactory;

    protected $table = 'seller';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function sellerDetails()
    {

    }
}