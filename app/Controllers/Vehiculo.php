<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_vehiculo;
class Vehiculo extends Controller{
    
    public function index()
    {
        $pac = new m_vehiculo();
        $datos['vehiculos_parqueadero']=$pac->findAll();
        return view('vehiculopg',$datos);
    }


    public function agregarV()
    {
        return view('agregarV');
    }

    public function insertarV()
    {
        $pac = new m_vehiculo();

        $data=[
            'vehiculos_placa' => $_POST['placa'],
            'vehiculos_marca' => $_POST['marca'],
            'vehiculos_serial' => $_POST['modelo'],
            'vehiculos_color' => $_POST['color'],
        ];

        $pac->insert($data);
        return redirect()->to(base_url('vehiculopg'));

    }

    public function eliminarV($idVehiculo=null)
    {
        $pac = new m_vehiculo();
        $pac->delete($idVehiculo);

        return redirect()->to(base_url('vehiculopg'));
    }

    public function editarV($idVehiculo = null)
    {
        $pac = new m_vehiculo();
        $registro['vehiculos_parqueadero']= $pac->find($idVehiculo);

      return view('actualizandoV',$registro);

      return redirect()->to(base_url('vehiculopg'));
    }

    public function factualizarV()
    {
        $pac = new m_vehiculo();
        $idVehiculo= $_POST['vehiculos_id '];

        $data = [
            'vehiculos_placa' => $_POST['vehiculos_placa'],
            'vehiculos_marca ' => $_POST['vehiculos_marca'],
            'vehiculos_serial ' => $_POST['vehiculos_serial'],
            'vehiculos_color ' => $_POST['vehiculos_color'],
        ];
        $pac->update($idVehiculo,$data);
        return redirect()->to(base_url('vehiculopg'));
    }
}