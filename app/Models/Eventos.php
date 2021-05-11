<?php


namespace App\Models;
use CodeIgniter\Model;


class Eventos extends Model
{
    protected $table = 'tb_eventos';
    protected $primaryKey = 'eventos_id';
    protected $allowedFields = [
        'eventos_local',
        'eventos_titulo',
        'eventos_data',
        'eventos_informacoes'
    ];
    protected $returnType = 'array';
    
}