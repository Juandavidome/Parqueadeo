<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\m_conductor;
class Conductor extends Controller{
    
    public function index()
    {
        $pac = new m_conductor();
        $datos['conductor_parqueadero']=$pac->findAll();
        return view('conductorpg',$datos);
    }


    public function agregar()
    {
        return view('agregar');
    }

    public function insertar()
    {
        $pac = new m_conductor();

        $data=[
            'conductor_cedula ' => $_POST['cedula_cli'],
            'conductor_nombre ' => $_POST['nombre_cli'],
            'conductor_edad ' => $_POST['edad_cli'],
            'conductor_genero ' => $_POST['genero_cli'],
        ];
        $pac->insert($data);
        return redirect()->to(base_url('conductorpg'));

    }


    public function eliminar($idConductor=null)
    {
        $pac = new m_conductor();
        $pac->delete($idConductor);

        return redirect()->to(base_url('conductorpg'));
    }

    public function editar($idConductor = null)
    {
        $pac = new m_conductor();
        $registro['conductor_parqueadero']= $pac->find($idConductor);

      return view('actualizando',$registro);

      return redirect()->to(base_url('conductorpg'));
    }

    public function factualizar()
    {
        $pac = new m_conductor();
        $idConductor= $_POST['conductor_id '];

        $data = [
            'conductor_cedula' => $_POST['cedula_cli'],
            'conductor_nombre' => $_POST['nombre_cli'],
            'conductor_edad' => $_POST['edad_cli'],
            'conductor_genero' => $_POST['genero_cli'],
        ];
        $pac->update($idConductor,$data);
        return redirect()->to(base_url('conductorpg'));
    }
}