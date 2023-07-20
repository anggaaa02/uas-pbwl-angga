<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hairstyle extends Model
{
    use HasFactory;
    protected $table = "tb_hairstyle";
    protected $primaryKey = "style_id";
    protected $guarded = [];


    public function pelanggan(): HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pel_id_style', 'style_id');
    }
}
