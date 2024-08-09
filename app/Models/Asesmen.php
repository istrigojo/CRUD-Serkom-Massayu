<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    use HasFactory;

    protected $table = 'asesmen';
    protected $guarded = ['id'];

    public function Skema()
    {
        return $this->belongsTo(Skema::class, 'id_skema');
    }
}
