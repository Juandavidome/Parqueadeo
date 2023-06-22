<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_vehiculo extends Model{
    protected $table      = 'vehiculos_parqueadero';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'vehiculos_id';

    protected $allowedFields = ['vehiculos_placa','vehiculos_marca ','vehiculos_serial ','vehiculos_color'];
}