<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Projects\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Users\User;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    protected $arrUserOptions;

    public function __construct() {

        $this->arrUserOptions = User::all(['id', DB::raw("CONCAT(name, '-[', email, ']') AS label")]);
    }
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

        $objProjects = Project::all();

        return view('clients.projects.index')
            ->with('jsonProjects', $objProjects->toJson());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.projects.create')
            ->with('objProject', new Project())
            ->with('arrUserOptions', $this->arrUserOptions->toJson());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $objRequest
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $objRequest)
    {
        if(Project::saveProject($objRequest)) {
            return parent::passResponse('Project created successfully.');
        }

        return parent::failedResponse();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function show($intId, Project $objProject)
    {
        $objProject = $objProject->findOrFail($intId);

        $objProject->teammates = $objProject->projectTeammates()->pluck('assignee_id')->toArray();

        return view('clients.projects.show')
            ->with('objProject', $objProject)
            ->with('arrUserOptions', $this->arrUserOptions->pluck('label', 'id')->toJson());
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

        return view('clients.projects.create')
            ->with('objProject', $objProject)
            ->with('arrUserOptions', $this->arrUserOptions->toJson());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $objRequest
     * @param  \App\Models\Projects\Project  $objProject
     * @return \Illuminate\Http\Response
     */
    public function update($intId, SaveProjectRequest $objRequest)
    {
        if(Project::saveProject($objRequest, $intId)) {
            return parent::passResponse('Project updated successfully.');
        }

        return parent::failedResponse();
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
