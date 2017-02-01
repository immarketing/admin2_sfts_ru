<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Agtest;

class AgTestsController extends Controller
{
    
    /**
     * Display a listing of the agtests.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $agtests = Agtest::paginate(25);

        return view('agtest.index', compact('agtests'));
    }

    /**
     * Show the form for creating a new agtest.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('agtest.create');
    }

    /**
     * Store a new agtest in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->affirm($request);
        $data = $request->all();
        
        Agtest::create($data);

        Session::flash('success_message', 'Agtest was added!');

        return redirect()->route('agtest.agtest.index');
    }

    /**
     * Display the specified agtest.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $agtest = Agtest::findOrFail($id);

        return view('agtest.show', compact('agtest'));
    }

    /**
     * Show the form for editing the specified agtest.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $agtest = Agtest::findOrFail($id);

        return view('agtest.edit', compact('agtest'));
    }

    /**
     * Update the specified agtest in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->affirm($request);
        $agtest = Agtest::findOrFail($id);
        $data = $request->all();
        
        $agtest->update($data);

        Session::flash('success_message', 'Agtest was updated!');

        return redirect()->route('agtest.agtest.index');
    }

    /**
     * Remove the specified agtest from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Agtest::destroy($id);

        Session::flash('success_message', 'Agtest was deleted!');

        return redirect()->route('agtest.agtest.index');
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
            'ShortName' => 'max:100',
            'Name' => 'max:200',
            'Code' => 'max:10',
            'GoogleSheetID' => 'max:50',
            'JSON' => 'max:2147483647',
                
        ]);

    }

}
