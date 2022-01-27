<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller{
    public function index(){
        return view('usuario/index');
    }

}