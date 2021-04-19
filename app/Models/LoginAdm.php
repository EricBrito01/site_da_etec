<?php 


namespace App\Models;

use CodeIgniter\Model;

class LoginAdm extends Model
{
    protected $table = "tb_login";
    protected $allowedFields = [
        'login_email',
        'login_senha',
        'login_nome'
    ];
    protected $returnType = 'array';
    protected $primaryKey = 'login_id';


    
}