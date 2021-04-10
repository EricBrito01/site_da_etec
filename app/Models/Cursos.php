<?php

namespace App\Models;

use CodeIgniter\Model;

class Cursos extends Model
{
    protected $table      = 'tb_cursos';
    protected $primaryKey = 'cursos_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['curso_descricao',
        'curso_horario',
        'curso_horario_fim',
        'curso_nome',
        'curso_vagas'
];

   
}