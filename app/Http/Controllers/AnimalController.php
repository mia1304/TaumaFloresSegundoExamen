<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    //listar animales
    public function index(){
        $animales=Animal::get();
        return $animales;
    }
    #ver Animal
    public function show($id)
    {
        $params = request()->all();
        if (isset($params['']) && $params[''] == true) {
            $animales = Animal::with([''])->find($id);
        } else {
            $animales = Animal::find($id);
        }
        if (is_null($animales)){
            return 'El Animal buscado  no existe';
        }
    
        return $animales;
    }
    #crear Animal
    public function store(Request $request)
    {
        $params = $request->all();
        $animales = Animal::create([
            'nombre' => $params['nombre'],
            'edad' => $params['edad']
        ]);
        return $animales;
    }

    #cambiar datos del Animal
    public function update($id, Request $request)
    {
        $params = $request->all();
        $animales = Animal::find($id)->update([
            'nombre' => $params['nombre'],
            'edad' => $params['edad']
        ]);
        return 'datos del Animal Actualizado';
        return $animales;
    }
    #Borrar Animal
    public function destroy($id)
    {
        $animales = Animal::find($id)->delete();

        if ($animales) {
            return 'Animal eliminado.';
        } else {
            return 'No se puedo eliminar Animal.';
        }
    }
}
