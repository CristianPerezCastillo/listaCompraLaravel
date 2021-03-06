<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $productos = Producto::all();
        return view('productos.index',
        array('arrayProductos' => $productos));
    }

    public function getShow($id)
    {
        return view('productos.show',
        array(
            'producto' => Producto::findOrFail($id)));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        return view('productos.edit',
        array(
            'id' => $id,
            'producto' => Producto::findOrFail($id)));
    }
}
