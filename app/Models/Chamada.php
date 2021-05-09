<?php


namespace App\Models;

use CodeIgniter\Model;

class Chamada extends Model

{
    protected $table = 'tb_chamada';
    protected $primaryKey = 'chamada_id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'chamada_titulo',
        'chamada_link',
        'chamada_data'
    ];
}