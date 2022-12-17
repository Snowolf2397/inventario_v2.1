<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;

/**
 * Class NotebookController
 * @package App\Http\Controllers
 */
class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = Notebook::paginate();

        return view('notebook.index', compact('notebooks'))
            ->with('i', (request()->input('page', 1) - 1) * $notebooks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notebook = new Notebook();
        return view('notebook.create', compact('notebook'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Notebook::$rules);

        $notebook = Notebook::create($request->all());

        return redirect()->route('notebooks.index')
            ->with('success', 'Notebook created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notebook = Notebook::find($id);

        return view('notebook.show', compact('notebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notebook = Notebook::find($id);

        return view('notebook.edit', compact('notebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notebook $notebook)
    {
        request()->validate(Notebook::$rules);

        $notebook->update($request->all());

        return redirect()->route('notebooks.index')
            ->with('success', 'Notebook updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notebook = Notebook::find($id)->delete();

        return redirect()->route('notebooks.index')
            ->with('success', 'Notebook deleted successfully');
    }
}
