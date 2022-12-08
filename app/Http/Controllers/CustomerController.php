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
    function actualizar($id) {
        $cliente = DB::table('customers')
            ->where('customerNumber', $id)
            ->First();
        return view('clientes_actualizar', compact('cliente'));
    }
    function guardar() {

        DB::table('customers')->insert([
            'customerName' => 'cualquiercosa',
            'contactFisrName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'adreesLine1' => $_POST['adreesLine1'],
            'city' => 'Lima',
            'country' => 'Peru'
        ]);
        return redirect()->route('clientes');
    }
    function editar($id) {

    DB::table('customers')->where('customerNumber', $id)
    ->update([
        'customerName' => 'cualquiercosa',
        'contactFirstName' => $_POST['contactFirstName'],
        'contactLastName' => $_POST['contactLastName'],
        'phone' => $_POST['phone'],
        'city' => $_POST['city'],
        'country' => 'Peru'
]);
return redirect()->route('clientes');
}
}
