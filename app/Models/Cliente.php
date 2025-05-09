<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nome_completo',
        'email',
        'telefone',
        'status_id',
    ];
    
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
