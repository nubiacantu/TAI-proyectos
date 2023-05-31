<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //constructor para proteccion de la url 'dashboard'
    //el constructor es lo que se ejectira cuando instancias un controlador

    public function __construct(){
        //protegemos la url
        //al metodo index con el constructor le pasamos el parametro de autenticacion
        $this->middleware('auth');
    }
    public function index()
    {
        $productos = Products::all();
        //se envian la lista de productos a la vista
        return view('productos')->with('productos', $productos);

    }

    public function delete($id)
    {
        //  para eliminar el producto de la base de datos
        Products::find($id)->delete();
        
        return redirect()->back()->with('success', 'Producto eliminado correctamente');
    }

    public function store(Request $request) {
        
        //validaciones del formulario de productos
        $this->validate($request,[
            'desc_corta'=>'required', 
            'desc_larga'=>'required', 
            'peso'=>'required', 
            'stock'=>'required', 
            'precio_venta'=>'required',
            'precio_compra'=>'required'
        ]);

        //Invocar el modelo Products para crear el registro
        Products::create([
            'descripcion_corta'=>$request->desc_corta,
            'descripcion_larga'=>$request->desc_larga,
            'peso'=>$request->peso,
            'stock'=>$request->stock,
            'precio_venta'=>$request->precio_venta,
            'precio_compra'=>$request->precio_compra,
            
        ]);

        //redireccionamiento
        return redirect()->route('product-list');

        
    }

}
