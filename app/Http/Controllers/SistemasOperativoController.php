<?php

namespace App\Http\Controllers;

use App\Models\SistemasOperativo;
use Illuminate\Http\Request;

/**
 * Class SistemasOperativoController
 * @package App\Http\Controllers
 */
class SistemasOperativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemasOperativos = SistemasOperativo::paginate();

        return view('sistemas-operativo.index', compact('sistemasOperativos'))
            ->with('i', (request()->input('page', 1) - 1) * $sistemasOperativos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sistemasOperativo = new SistemasOperativo();
        return view('sistemas-operativo.create', compact('sistemasOperativo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SistemasOperativo::$rules);

        $sistemasOperativo = SistemasOperativo::create($request->all());

        return redirect()->route('sistemas-operativos.index')
            ->with('success', 'SistemasOperativo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sistemasOperativo = SistemasOperativo::find($id);

        return view('sistemas-operativo.show', compact('sistemasOperativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sistemasOperativo = SistemasOperativo::find($id);

        return view('sistemas-operativo.edit', compact('sistemasOperativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SistemasOperativo $sistemasOperativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SistemasOperativo $sistemasOperativo)
    {
        request()->validate(SistemasOperativo::$rules);

        $sistemasOperativo->update($request->all());

        return redirect()->route('sistemas-operativos.index')
            ->with('success', 'SistemasOperativo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sistemasOperativo = SistemasOperativo::find($id)->delete();

        return redirect()->route('sistemas-operativos.index')
            ->with('success', 'SistemasOperativo deleted successfully');
    }
}
