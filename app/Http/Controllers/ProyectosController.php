<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    public function main()
    {
        $data = DB::select("SELECT * FROM proyectos");
        return view("welcome")->with("data", $data);
    }
    public function create(Request $request)
    {
        $sql =  DB::insert("INSERT INTO proyectos(NombreProyecto,FuenteFondos,MontoPlanificado,MontoPatrocinado,MontoFondosPropios) VALUES (?,?,?,?,?)", [
            $request->NombreProyecto,
            $request->FuenteFondos,
            $request->MontoPlanificado,
            $request->MontoPatrocinado,
            $request->MontoFondosPropios
        ]);

        if ($sql == true) {
            return back()->with("exito", "Se inserto correctamente.");
        } else {
            return back()->with("error", "Ocurrio un error.");
        }
    }
    public function read($id)
    {
        $data =  DB::select("SELECT * FROM proyectos WHERE Id = $id");
        return view("read")->with("data", $data);
    }
    public function update(Request $request)
    {
        try {
            $sql = DB::update("UPDATE proyectos SET NombreProyecto = ?, FuenteFondos = ?, MontoPlanificado = ?, MontoPatrocinado = ?, MontoFondosPropios = ? WHERE Id = ?", [
                $request->NombreProyecto,
                $request->FuenteFondos,
                $request->MontoPlanificado,
                $request->MontoPatrocinado,
                $request->MontoFondosPropios,
                $request->Id 
            ]);
    
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
    
        if ($sql == true) {
            return back()->with("exito", "Se actualizó correctamente.");
        } else {
            return back()->with("error", "Ocurrió un error.");
        }
    }
    public function delete($id)
    {
        try {
            $sql =  DB::delete("DELETE FROM proyectos WHERE Id = $id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("exito", "Se elimino correctamente.");
        } else {
            return back()->with("error", "Ocurrio un error.");
        }
    }
}
