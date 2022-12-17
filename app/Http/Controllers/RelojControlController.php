<?php

namespace App\Http\Controllers;

use App\Models\RelojControl;
use Illuminate\Http\Request;

/**
 * Class RelojControlController
 * @package App\Http\Controllers
 */
class RelojControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relojControls = RelojControl::paginate();

        return view('reloj-control.index', compact('relojControls'))
            ->with('i', (request()->input('page', 1) - 1) * $relojControls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relojControl = new RelojControl();
        return view('reloj-control.create', compact('relojControl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RelojControl::$rules);

        $relojControl = RelojControl::create($request->all());

        return redirect()->route('reloj-controls.index')
            ->with('success', 'RelojControl created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relojControl = RelojControl::find($id);

        return view('reloj-control.show', compact('relojControl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relojControl = RelojControl::find($id);

        return view('reloj-control.edit', compact('relojControl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RelojControl $relojControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RelojControl $relojControl)
    {
        request()->validate(RelojControl::$rules);

        $relojControl->update($request->all());

        return redirect()->route('reloj-controls.index')
            ->with('success', 'RelojControl updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $relojControl = RelojControl::find($id)->delete();

        return redirect()->route('reloj-controls.index')
            ->with('success', 'RelojControl deleted successfully');
    }
}
