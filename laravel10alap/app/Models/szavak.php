<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    use HasFactory;
    protected $fillable=[
        "angol",
        "magyar",
        "temaId"

    ];

    public function tema(){
        return $this ->belongsTo(Tema::class,'temaId','temaId');
    }
}
