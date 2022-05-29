<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelProdutos;
use Log;

class ProdutosController extends Controller
{
    private $objProdutos;

    public function __construct(){
        $this->objProdutos = new ModelProdutos;
    }
    
    public function index(){
        $produtos = $this->objProdutos->all();
        return view('produtos.index',compact('produtos'));
    }
    
    public function create(){   
        return view('produtos.create');
    }
    
    public function edit($id){
        $produtos = $this->objProdutos->find($id);
        return view('produtos.create',compact('produtos'));
    }

    public function store(Request $request){
        $cad = $this->objProdutos->create([
            'id' => $request->id,
            'nome' => $request->nome,
            'preco' => $request->preco
        ]);
        if($cad){
            return redirect('produtos');
        }
    }

    public function update(Request $request, $id){
        $this->objProdutos->where(['id'=>$id])->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'preco' => $request->preco
        ]);
        return redirect('produtos');
    }

    public function destroy($id){
        $del = $this->objProdutos->destroy($id);
        return redirect('produtos');
    }
}