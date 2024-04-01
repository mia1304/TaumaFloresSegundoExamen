<?php

namespace App\Http\Controllers;
use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
     //listar Especies
     public function index(){
        $especies=Especie::get();
        return $especies;
    }
    #ver Especie
    public function show($id)
    {
        $params = request()->all();
        if (isset($params['']) && $params[''] == true) {
            $especies = Especie::with([''])->find($id);
        } else {
            $especies = Especie::find($id);
        }
        if (is_null($especies)){
            return 'El Especie buscado  no existe';
        }
    
        return $especies;
    }
     #crear Especie
     public function store(Request $request)
     {
         $params = $request->all();
         $especies = Especie::create([
             'tipo_especie' => $params['tipo_especie']
         ]);
         return $especies;
     }
     #cambiar datos del Especie
    public function update($id, Request $request)
    {
        $params = $request->all();
        $especies = Especie::find($id)->update([
            'tipo_especie' => $params['tipo_especie']
        ]);
        return 'datos del Especie Actualizado';
        return $especies;
    }
    #Borrar Especie
    public function destroy($id)
    {
        $especies = Especie::find($id)->delete();

        if ($especies) {
            return 'Especie eliminado.';
        } else {
            return 'No se puedo eliminar Especie.';
        }
    }
}
