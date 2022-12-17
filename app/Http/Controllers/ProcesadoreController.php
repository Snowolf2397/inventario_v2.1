<?php

namespace App\Http\Controllers;

use App\Models\Procesadore;
use Illuminate\Http\Request;

/**
 * Class ProcesadoreController
 * @package App\Http\Controllers
 */
class ProcesadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesadores = Procesadore::paginate();

        return view('procesadore.index', compact('procesadores'))
            ->with('i', (request()->input('page', 1) - 1) * $procesadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procesadore = new Procesadore();
        return view('procesadore.create', compact('procesadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Procesadore::$rules);

        $procesadore = Procesadore::create($request->all());

        return redirect()->route('procesadores.index')
            ->with('success', 'Procesadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procesadore = Procesadore::find($id);

        return view('procesadore.show', compact('procesadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procesadore = Procesadore::find($id);

        return view('procesadore.edit', compact('procesadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Procesadore $procesadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procesadore $procesadore)
    {
        request()->validate(Procesadore::$rules);

        $procesadore->update($request->all());

        return redirect()->route('procesadores.index')
            ->with('success', 'Procesadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $procesadore = Procesadore::find($id)->delete();

        return redirect()->route('procesadores.index')
            ->with('success', 'Procesadore deleted successfully');
    }
}
