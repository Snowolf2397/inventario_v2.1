<?php

namespace App\Http\Controllers;

use App\Models\Monitore;
use Illuminate\Http\Request;

/**
 * Class MonitoreController
 * @package App\Http\Controllers
 */
class MonitoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitores = Monitore::paginate();

        return view('monitore.index', compact('monitores'))
            ->with('i', (request()->input('page', 1) - 1) * $monitores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monitore = new Monitore();
        return view('monitore.create', compact('monitore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Monitore::$rules);

        $monitore = Monitore::create($request->all());

        return redirect()->route('monitores.index')
            ->with('success', 'Monitore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitore = Monitore::find($id);

        return view('monitore.show', compact('monitore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monitore = Monitore::find($id);

        return view('monitore.edit', compact('monitore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Monitore $monitore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitore $monitore)
    {
        request()->validate(Monitore::$rules);

        $monitore->update($request->all());

        return redirect()->route('monitores.index')
            ->with('success', 'Monitore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $monitore = Monitore::find($id)->delete();

        return redirect()->route('monitores.index')
            ->with('success', 'Monitore deleted successfully');
    }
}
