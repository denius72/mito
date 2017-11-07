<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Product as Product;
use App\Models\Category as Category;
use DB;

class ProductsController {

    public function index() {
        $products = Product::all();
        $total = Product::count();

        // Aqui vai toda a consulta com o banco de dados
        return include('../resources/views/products/index.blade.php');      
    }

    public function new() {
        $categories = Category::all(); 
        
        // Aqui vai toda a consulta com o banco de dados
        return include('../resources/views/products/new.blade.php');
    }

    public function newcategory() {

        // Aqui vai toda a consulta com o banco de dados
        return include('../resources/views/products/newcat.blade.php');
    }

    public function createcategory() {
        
        $nome  = $_POST['nome'];
    
        $p = new Category;
        $p->nome = $nome;
        $p->save();
    
        if($p->save()) {
            $_SESSION['msg'] = "Categoria cadastrada com sucesso";
            header('Location: /admin/products');
            exit();
        } else {
            $_SESSION['error'] = "Ocorreu um erro ao cadastrar a categoria, verifique os dados novamente.";
            return include('../resources/views/products/newcat.blade.php');
        }    
    }

    public function create() {

        $nome  = $_POST['nome'];
        $valor = $_POST['valor'];
        $category = $_POST['categoria'];
    
        $p = new Product;
        $p->nome = $nome;
        $p->valor = $valor;
        $p->idcategories = $category;
        $p->save();
  
        if($p->save()) {
            $_SESSION['msg'] = "Produto cadastrado com sucesso";
            header('Location: /admin/products');
            exit();
        } else {
            $_SESSION['error'] = "Ocorreu um erro ao cadastrar o produto, verifique os dados novamente.";
            return include('../resources/views/products/new.blade.php');
        }    
    }

    public function show() {
        $id = $_GET['id'];

        $pdao = new ProductDAO();
        $product = $pdao->find($id);

        return include('../resources/views/products/show.blade.php');
    }

    public function edit() {
        $id = $_GET['id'];
        $nome  = isset($_GET['product_name']) ? $_GET['product_name'] : '';
        $valor = isset($_GET['product_value']) ? $_GET['product_value'] : '';
        

        // Aqui vai toda a consulta com o banco de dados
        return include('../resources/views/products/edit.blade.php');
    }

    public function editconfirm(){
        $id  = $_POST['product_id'];
        $nome = $_POST['product_name'];
        $valor = $_POST['product_value'];

        DB::table('products')
            ->where('id', $id)
            ->update(['nome' => $nome]);

        DB::table('products')
            ->where('id', $id)
            ->update(['valor' => $valor]);

            header('Location: /admin/products');
            exit();

    }

    public function delete(){
        return include('../resources/views/products/delete.blade.php');
    }

    public function deleteconfirm(){
        $id  = $_POST['product_id'];

        DB::table('products')
            ->where('id', '=', $id)
            ->delete();
            header('Location: /admin/products');
            exit();
    }

}