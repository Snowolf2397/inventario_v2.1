<?php

namespace App\Http\Controllers;

use App\Models\Teclado;
use App\Models\Marca;
use App\Models\Ubicacione;
use App\Models\Funcionario;
use Illuminate\Http\Request;

/**
 * Class TecladoController
 * @package App\Http\Controllers
 */
class TecladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teclados = Teclado::paginate();

        return view('teclado.index', compact('teclados'))
            ->with('i', (request()->input('page', 1) - 1) * $teclados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teclado = new Teclado();
        $teclado_marcas = Marca::pluck('nombre','id');
        $teclado_ubicaciones = Ubicacione::pluck('nombre','id');
        $teclado_funcionarios = Funcionario::pluck('nombres','rut');

        return view('teclado.create', compact('teclado','teclado_marcas','teclado_ubicaciones','teclado_funcionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Teclado::$rules);

        $teclado = Teclado::create($request->all());

        return redirect()->route('teclados.index')
            ->with('success', 'Teclado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teclado = Teclado::find($id);

        return view('teclado.show', compact('teclado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teclado = Teclado::find($id);

        return view('teclado.edit', compact('teclado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Teclado $teclado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teclado $teclado)
    {
        request()->validate(Teclado::$rules);

        $teclado->update($request->all());

        return redirect()->route('teclados.index')
            ->with('success', 'Teclado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $teclado = Teclado::find($id)->delete();

        return redirect()->route('teclados.index')
            ->with('success', 'Teclado deleted successfully');
    }
}
