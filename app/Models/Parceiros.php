<?php

namespace App\Models;

use CodeIgniter\Model;

class Parceiros extends Model
{
    protected $table = 'tb_parceiros';
    protected $primaryKey = 'parceiro_id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'parceiro_nome',
        'parceiro_foto',
        'parceiro_descricao'
    ];
}