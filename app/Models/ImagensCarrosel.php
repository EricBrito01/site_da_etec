<?php


namespace App\Models;

use CodeIgniter\Model;

class ImagensCarrosel extends Model
{
    protected $table = "tb_imagens";
    protected $primaryKey = "imagem_id";
    protected $returnType = 'array';
    protected $allowedFields = [
        'imagem_id',
        'imagem_nome'
    ];
}