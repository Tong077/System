<?php

namespace App\Http\Controllers;

use App\Models\ControlSystem;


use App\Services\SystemControlService;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    private readonly SystemControlService $systemControlService;
    public function __construct(SystemControlService $systemControlService)
    {
        $this->systemControlService = $systemControlService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ss = $this->systemControlService->getAll();
        return view('controls.index', compact('ss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('controls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ControlSystem $controlSystem)
    {
        
        $this->systemControlService->create($request, $controlSystem);
        return redirect()->route('controls.index')->with('success', 'System created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $system = $this->systemControlService->getById($id);
        return view('controls.edit', compact('system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,ControlSystem $control)
    {
        // dd($request->all(), $controlSystem);

        $this->systemControlService->update($request, $control);
        return redirect()->route('controls.index')->with('success', 'System updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ControlSystem $control)
    {

        $this->systemControlService->delete($control);

        return redirect()->route('controls.index')->with('success', 'System deleted successfully.');
    }
}
