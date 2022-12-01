<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }
    function index() {
        $listado = DB::table("customers")->get();
        return view('clientes', compact('listado'));    
    }
    function empleado() {
        $listado = DB::table("employees")->get();
        return view('empleados', compact('listado'));    
    }
    function registrar() {
        return view('clientes_registrar');
    }
    function guardar() {

        DB::table('customers')->insert([
            'customerName' => 'cualquiercosa',
            'contactFisrName' => $_POST['contactFisrName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'adreesLine1' => $_POST['adreesLine1'],
            'city' => 'Lima',
            'country' => 'Peru'
            

        ]);
        return redirect()->route('clientes');
    }
}
