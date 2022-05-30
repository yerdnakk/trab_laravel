<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPessoas;
use App\Models\ModelProdutos;
use App\Models\ModelCidades;
use Log;

class PessoasController extends Controller
{
    private $objPessoas;
    private $objCidades;
    private $objProdutos;

    public function __construct(){
        $this->objPessoas = new ModelPessoas;
        $this->objCidades = new ModelCidades;
        $this->objProdutos = new ModelProdutos;
    }
    
    public function index(){
        $pessoas = $this->objPessoas->all();
        return view('pessoas.index',compact('pessoas'));
    }
    
    public function create(){
        $cidades = $this->objCidades->all();
        $produtos = $this->objProdutos->all();
        return view('pessoas.create',compact('cidades','produtos'));
    }
    
    public function edit($id){
        $pessoas = $this->objPessoas->find($id);
        $cidades = $this->objCidades->all();
        $produtos = $this->objProdutos->all();
        return view('pessoas.create',compact('pessoas','cidades','produtos'));
    }

    public function store(Request $request){
        $cad = $this->objPessoas->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'produto' => $request->produto,
            'cidade' => $request->cidade
        ]);
        if($cad){
            return redirect('pessoas');
        }
    }

    public function update(Request $request, $id){
        $this->objPessoas->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'produto' => $request->produto,
            'cidade' => $request->cidade
        ]);
        return redirect('pessoas');
    }

    public function destroy($id){
        $del = $this->objPessoas->destroy($id);
        return redirect('pessoas');
    }
}