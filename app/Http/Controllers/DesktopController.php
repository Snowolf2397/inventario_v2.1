<?php

namespace App\Http\Controllers;

use App\Models\Desktop;
use Illuminate\Http\Request;

/**
 * Class DesktopController
 * @package App\Http\Controllers
 */
class DesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desktops = Desktop::paginate();

        return view('desktop.index', compact('desktops'))
            ->with('i', (request()->input('page', 1) - 1) * $desktops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desktop = new Desktop();
        return view('desktop.create', compact('desktop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Desktop::$rules);

        $desktop = Desktop::create($request->all());

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desktop = Desktop::find($id);

        return view('desktop.show', compact('desktop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desktop = Desktop::find($id);

        return view('desktop.edit', compact('desktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Desktop $desktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desktop $desktop)
    {
        request()->validate(Desktop::$rules);

        $desktop->update($request->all());

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $desktop = Desktop::find($id)->delete();

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop deleted successfully');
    }
}
