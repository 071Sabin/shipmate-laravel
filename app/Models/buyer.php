<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    use HasFactory;

    protected $table = 'buyer';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function buyerDetails()
    {

    }
}