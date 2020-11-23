<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use Notifiable;

    protected $fillable = [
        'valor_total', 'quant_tot_comprada',  'cpf_gerente'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
