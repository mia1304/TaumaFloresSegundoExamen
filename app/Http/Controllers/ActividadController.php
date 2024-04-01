<?php

namespace App\Http\Controllers;
use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    //listar Actividades
    public function index(){
        $actividades=Actividad::get();
        return $actividades;
    }
    #ver Actividad
    public function show($id)
    {
        $params = request()->all();
        if (isset($params['']) && $params[''] == true) {
            $actividades = Actividad::with([''])->find($id);
        } else {
            $actividades = Actividad::find($id);
        }
        if (is_null($actividades)){
            return 'El Actividad buscado  no existe';
        }
    
        return $actividades;
    }
     #crear Actividad
     public function store(Request $request)
     {
         $params = $request->all();
         $actividades = Actividad::create([
             'dia' => $params['dia'],
             'hora' => $params['hora']
         ]);
         return $actividades;
     }
     #cambiar datos del Actividad
    public function update($id, Request $request)
    {
        $params = $request->all();
        $actividades = Actividad::find($id)->update([
            'dia' => $params['dia'],
            'hora' => $params['hora']
        ]);
        return 'datos del Actividad Actualizado';
        return $actividades;
    }
    #Borrar Actividad
    public function destroy($id)
    {
        $actividades = Actividad::find($id)->delete();

        if ($actividades) {
            return 'Actividad eliminado.';
        } else {
            return 'No se puedo eliminar Actividad.';
        }
    }
}
