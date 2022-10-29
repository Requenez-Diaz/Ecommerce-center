<?php

namespace App\Http\Controllers;

use App\Models\CategoriaTienda;
use App\Http\Requests\StoreCategoriaTiendaRequest;
use App\Http\Requests\UpdateCategoriaTiendaRequest;

class CategoriaTiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos['categoriaTiendas'] = CategoriaTienda::all();
       return View('categoriaTienda/index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriaTiendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaTiendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaTienda $categoriaTienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaTienda $categoriaTienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriaTiendaRequest  $request
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaTiendaRequest $request, CategoriaTienda $categoriaTienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaTienda  $categoriaTienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaTienda $categoriaTienda)
    {
        //
    }
}
