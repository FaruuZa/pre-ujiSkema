<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class barangKirim extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Barang(){
        return $this->hasOne(Barang::class, 'id');
    }
    public function Supplier(){
        return $this->belongsTo(Supplier::class, 'id');
    }
}
