<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;

    protected $table = 'seller';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function sellerDetails()
    {

    }
}