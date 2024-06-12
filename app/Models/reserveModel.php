<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserveModel extends Model
{
    use HasFactory;

    protected $table = 'reserve';

    protected $fillable = [
        'name',
        'email',
        'total_guest',
        'date',
        'time',
    ];

    public $timestamps = false;
}
