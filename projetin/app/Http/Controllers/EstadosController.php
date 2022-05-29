<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelEstados;
use Log;

class EstadosController extends Controller
{
    private $objEstados;

    public function __construct(){
        $this->objEstados = new ModelEstados;
    }
    
    public function index(){
        $estados = $this->objEstados->all();
        return view('estados.index',compact('estados'));
    }
    
    public function create(){   
        return view('estados.create');
    }
    
    public function edit($id){
        $estados = $this->objEstados->find($id);
        return view('estados.create',compact('estados'));
    }

    public function store(Request $request){
        $cad = $this->objEstados->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'sigla' => $request->sigla
        ]);
        if($cad){
            return redirect('estados');
        }
    }

    public function update(Request $request, $id){
        $this->objEstados->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'sigla' => $request->sigla
        ]);
        return redirect('estados');
    }

    public function destroy($id){
        $del = $this->objEstados->destroy($id);
        return redirect('estados');
    }
}