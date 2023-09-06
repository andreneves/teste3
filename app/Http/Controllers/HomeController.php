<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoria_count = Categoria::count();
        $produto_count = Produto::count();
        //$categorias = Categoria::get();
        $produtos = Produto::get();

        return view('home', [
            'categoria_count'   => $categoria_count, 
            'produto_count'     => $produto_count,
            //'categorias'        => $categorias,
            'produtos'          => $produtos
        ]);

    }

    /*
    // isto foi só um estudo sobre rotas para dar em aula
    public function test(Request $request){
        dd($request->route()->action['middleware'][0]);
        //dd($request->collect());
        $route = Route::current(); // Illuminate\Routing\Route
        $name = Route::currentRouteName(); // string
        $action = Route::currentRouteAction(); // string
        dd($route, $name, $action);
    }
    */
}
