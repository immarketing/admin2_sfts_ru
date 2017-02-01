<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Agcourse;

class AgCoursesController extends Controller
{
    
    /**
     * Display a listing of the agcourses.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $agcourses = Agcourse::paginate(25);

        return view('agcourse.index', compact('agcourses'));
    }

    /**
     * Show the form for creating a new agcourse.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('agcourse.create');
    }

    /**
     * Store a new agcourse in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->affirm($request);
        $data = $request->all();
        
        Agcourse::create($data);

        Session::flash('success_message', 'Agcourse was added!');

        return redirect()->route('agcourse.agcourse.index');
    }

    /**
     * Display the specified agcourse.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $agcourse = Agcourse::findOrFail($id);

        return view('agcourse.show', compact('agcourse'));
    }

    /**
     * Show the form for editing the specified agcourse.
     *
     * @param  int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $agcourse = Agcourse::findOrFail($id);

        return view('agcourse.edit', compact('agcourse'));
    }

    /**
     * Update the specified agcourse in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->affirm($request);
        $agcourse = Agcourse::findOrFail($id);
        $data = $request->all();
        
        $agcourse->update($data);

        Session::flash('success_message', 'Agcourse was updated!');

        return redirect()->route('agcourse.agcourse.index');
    }

    /**
     * Remove the specified agcourse from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Agcourse::destroy($id);

        Session::flash('success_message', 'Agcourse was deleted!');

        return redirect()->route('agcourse.agcourse.index');
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
            'googleDocID' => 'max:50',
            'TOCJSON' => 'max:20000|json',
            'Code' => 'max:10',
                
        ]);

    }

}
