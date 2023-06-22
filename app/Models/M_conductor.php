<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_conductor extends Model{
    protected $table      = 'conductor_parqueadero ';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'conductor_id';

    protected $allowedFields = ['conductor_cedula ','conductor_nombre ','conductor_edad ','conductor_genero'];
}