<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggan";
    protected $primaryKey = "pel_id";
    protected $guarded = [];


    public function hairstyle(): BelongsTo
    {
        return $this->belongsTo(Hairstyle::class, 'pel_id_style', 'style_id', 'style_harga');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pel_id_user', 'id', 'email');
    }
}
