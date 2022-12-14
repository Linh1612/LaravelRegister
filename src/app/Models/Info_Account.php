<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_Account extends Model
{
    use HasFactory;
    protected $table = 'info_account';

    protected $fillable = [
        'id',
        'name',
        'age',
        'address',
    ];
}
