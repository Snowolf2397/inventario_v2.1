<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

/**
 * Class FuncionarioController
 * @package App\Http\Controllers
 */
class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::paginate();

        return view('funcionario.index', compact('funcionarios'))
            ->with('i', (request()->input('page', 1) - 1) * $funcionarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcionario = new Funcionario();
        return view('funcionario.create', compact('funcionario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Funcionario::$rules);

        $funcionario = Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Funcionario $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        request()->validate(Funcionario::$rules);

        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::find($id)->delete();

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionario deleted successfully');
    }
}
