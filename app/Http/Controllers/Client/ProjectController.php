<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Projects\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SaveProjectRequest;

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

        $objProjects = Project::paginate(5);

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
    public function store(SaveProjectRequest $request)
    {
        $objProject = new Project();

        $objProject->name = $request->name;
        $objProject->key = $request->key;
        $objProject->url = $request->url;

        $objProject->client_id = auth()->user()->client_id;
        $objProject->created_by = auth()->user()->id;
        $objProject->updated_by = auth()->user()->id;

        if ($objProject->save()) {
            return response()
                ->json(['name' => 'Abigail', 'state' => 'CA'])
                ->withCallback($request->all());
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function show($intId, Project $objProject)
    {
        $objProject = $objProject->find($intId);

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
    public function edit($intId, Project $objProject)
    {
        $objProject = $objProject->find($intId);

        return view('clients.projects.create')->with('objProject', $objProject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function update($intId, SaveProjectRequest $request)
    {
        $objProject = Project::find($intId);

        $objProject->name = $request->name;
        $objProject->key = $request->key;
        $objProject->url = $request->url;

        $objProject->client_id = auth()->user()->client_id;
        $objProject->created_by = auth()->user()->id;
        $objProject->updated_by = auth()->user()->id;

        if ($objProject->save()) {
            return response()->json(true);
        }
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
