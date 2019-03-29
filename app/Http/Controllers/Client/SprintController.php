<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveSprintRequest;
use App\Models\Projects\Project;
use Illuminate\Support\Facades\DB;
use App\Models\Sprints\Sprint;

class SprintController extends Controller
{

    private $objSprint;
    private $objProject;

    public function __construct(Sprint $objSprint, Project $objProject)
    {
        $this->objSprint = $objSprint;
        $this->objProject = $objProject;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrObjSprints = $this->objSprint->all();

        return view('clients.sprints.index')
        ->with('jsonSprints', $arrObjSprints->toJson());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrProjectOptions = $this->objProject->all(['id', DB::raw("name AS label")]);

        return view('clients.sprints.create')
        ->with('objSprint', $this->objSprint)
        ->with('arrProjectOptions', $arrProjectOptions->toJson());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $objRequest
     * @return \Illuminate\Http\Response
     */
    public function store(SaveSprintRequest $objRequest)
    {
        if ($this->objSprint->saveSprint($objRequest)) {
            return parent::passResponse('Sprint created successfully.');
        }

        return parent::failedResponse();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Sprints\Sprint $objSprint
     * @return \Illuminate\Http\Response
     */
    public function show($intId)
    {
        $objSprint = $this->objSprint->findOrFail($intId);

        $arrProjectOptions = $this->objProject->all(['id', DB::raw("name AS label")]);

        return view('clients.sprints.show')
        ->with('objSprint', $objSprint)
        ->with('arrProjectOptions', $arrProjectOptions->pluck('label', 'id')->toJson());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Sprints\Sprint $objSprint
     * @return \Illuminate\Http\Response
     */
    public function edit($intId)
    {
        $objSprint = $this->objSprint->find($intId);

        $arrProjectOptions = $this->objProject->all(['id', DB::raw("name AS label")]);

        return view('clients.sprints.create')
        ->with('objSprint', $objSprint)
        ->with('arrProjectOptions', $arrProjectOptions->toJson());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $objRequest
     * @param \App\Models\Sprints\Sprint $objSprint
     * @return \Illuminate\Http\Response
     */
    public function update($intId, SaveSprintRequest $objRequest)
    {
        if ($this->objSprint->saveSprint($objRequest, $intId)) {
            return parent::passResponse('Sprint updated successfully.');
        }

        return parent::failedResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Sprints\Sprint $objSprint
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
