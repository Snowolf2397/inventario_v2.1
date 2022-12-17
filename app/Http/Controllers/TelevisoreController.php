<?php

namespace App\Http\Controllers;

use App\Models\Televisore;
use Illuminate\Http\Request;

/**
 * Class TelevisoreController
 * @package App\Http\Controllers
 */
class TelevisoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $televisores = Televisore::paginate();

        return view('televisore.index', compact('televisores'))
            ->with('i', (request()->input('page', 1) - 1) * $televisores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $televisore = new Televisore();
        return view('televisore.create', compact('televisore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Televisore::$rules);

        $televisore = Televisore::create($request->all());

        return redirect()->route('televisores.index')
            ->with('success', 'Televisore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $televisore = Televisore::find($id);

        return view('televisore.show', compact('televisore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $televisore = Televisore::find($id);

        return view('televisore.edit', compact('televisore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Televisore $televisore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Televisore $televisore)
    {
        request()->validate(Televisore::$rules);

        $televisore->update($request->all());

        return redirect()->route('televisores.index')
            ->with('success', 'Televisore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $televisore = Televisore::find($id)->delete();

        return redirect()->route('televisores.index')
            ->with('success', 'Televisore deleted successfully');
    }
}
