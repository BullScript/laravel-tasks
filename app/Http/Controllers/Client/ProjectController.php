<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Projects\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $user = auth()->user();

//         dd(Mail::send('emails.welcome', ['user' => $user], function ($m) use ($user) {
//             $m->from('neha@mt.com', 'Required money');

//             $m->to('prajaktakhairnar23@gmail.com', $user->name)->subject('Urgent required money!');
//         }));

        $objProjects = Project::paginate(15);

        return view('clients.projects.index')
            ->with('projects', $objProjects)
            ->with('jsonProjects', $objProjects->toJson());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $objProject)
    {
        return view('clients.projects.create')
            ->with('objProject', $objProject);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $objProject)
    {
        $objProject->client_id = 1;
        $objProject->name = $request->name;
        $objProject->key = $request->key;
        $objProject->url = $request->url;
        $objProject->created_by = auth()->user()->id;
        $objProject->updated_by = auth()->user()->id;

        if ($objProject->save()) {
            Session::flash('flash_message', 'Project created successfully.');
            return redirect()->route('projects.index');
        }

        return redirect()->back();


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function show($id, Project $objProject)
    {
        $project = $objProject->find($id);

        dd($project);
        return view('users.show')
        ->withUserDetail($userDetail)
        ->withUsers($this->users)
        ->withUserTypes($this->userTypes);

        return view('clients.projects.show')->with('objProject', $objProject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $objProject)
    {
        return view('clients.projects.create')->with('objProject', $objProject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $objProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $objProject)
    {
        //
    }
}
