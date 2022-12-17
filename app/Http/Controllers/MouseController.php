<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use Illuminate\Http\Request;

/**
 * Class MouseController
 * @package App\Http\Controllers
 */
class MouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mice = Mouse::paginate();

        return view('mouse.index', compact('mice'))
            ->with('i', (request()->input('page', 1) - 1) * $mice->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mouse = new Mouse();
        return view('mouse.create', compact('mouse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mouse::$rules);

        $mouse = Mouse::create($request->all());

        return redirect()->route('mice.index')
            ->with('success', 'Mouse created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mouse = Mouse::find($id);

        return view('mouse.show', compact('mouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mouse = Mouse::find($id);

        return view('mouse.edit', compact('mouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mouse $mouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mouse $mouse)
    {
        request()->validate(Mouse::$rules);

        $mouse->update($request->all());

        return redirect()->route('mice.index')
            ->with('success', 'Mouse updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mouse = Mouse::find($id)->delete();

        return redirect()->route('mice.index')
            ->with('success', 'Mouse deleted successfully');
    }
}
