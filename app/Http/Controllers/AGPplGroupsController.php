<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Agpplgroup;

class AGPplGroupsController extends Controller
{
    
    /**
     * Display a listing of the agpplgroups.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $agpplgroups = Agpplgroup::paginate(25);

        return view('agpplgroup.index', compact('agpplgroups'));
    }

    /**
     * Show the form for creating a new agpplgroup.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('agpplgroup.create');
    }

    /**
     * Store a new agpplgroup in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->affirm($request);
        $data = $request->all();
        
        Agpplgroup::create($data);

        Session::flash('success_message', 'Agpplgroup was added!');

        return redirect()->route('agpplgroup.agpplgroup.index');
    }

    /**
     * Display the specified agpplgroup.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $agpplgroup = Agpplgroup::findOrFail($id);

        return view('agpplgroup.show', compact('agpplgroup'));
    }

    /**
     * Show the form for editing the specified agpplgroup.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $agpplgroup = Agpplgroup::findOrFail($id);

        return view('agpplgroup.edit', compact('agpplgroup'));
    }

    /**
     * Update the specified agpplgroup in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->affirm($request);
        $agpplgroup = Agpplgroup::findOrFail($id);
        $data = $request->all();
        
        $agpplgroup->update($data);

        Session::flash('success_message', 'Agpplgroup was updated!');

        return redirect()->route('agpplgroup.agpplgroup.index');
    }

    /**
     * Remove the specified agpplgroup from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Agpplgroup::destroy($id);

        Session::flash('success_message', 'Agpplgroup was deleted!');

        return redirect()->route('agpplgroup.agpplgroup.index');
    }

    /**
     * Validate the given request with the defined rules.
     *
     * @param  Illuminate\Http\Request  $request
     *
     * @return boolean
     */
    protected function affirm(Request $request)
    {
        return $this->validate($request, [
            'Code' => 'max:10',
            'Name' => 'max:200',
                
        ]);

    }

}
