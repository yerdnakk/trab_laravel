<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCidades;
use App\Models\ModelEstados;
use Log;

class CidadesController extends Controller
{
    private $objCidades;
    private $objEstados;

    public function __construct(){
        $this->objCidades = new ModelCidades;
        $this->objEstados = new ModelEstados;
    }
    
    public function index(){
        $cidades = $this->objCidades->all();
        return view('cidades.index',compact('cidades'));
    }
    
    public function create(){
        $estados = $this->objEstados->all();
        return view('cidades.create',compact('estados'));
    }
    
    public function edit($id){
        $cidades = $this->objCidades->find($id);
        $estados = $this->objEstados->all();
        return view('cidades.create',compact('cidades','estados'));
    }

    public function store(Request $request){
        $cad = $this->objCidades->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'estado' => $request->estado
        ]);
        if($cad){
            return redirect('cidades');
        }
    }

    public function update(Request $request, $id){
        $this->objCidades->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'estado' => $request->estado
        ]);
        return redirect('cidades');
    }

    public function destroy($id){
        $del = $this->objCidades->destroy($id);
        return redirect('cidades');
    }
}