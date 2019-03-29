<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveTaskRequest;
use App\Models\Tasks\Task;
use App\Traits\TaskTrait;
use Illuminate\Http\Request;
use App\Models\TaskNotes\TaskNote;

class TaskController extends Controller
{
    use TaskTrait;

    private $objTask;

    protected $arrOptions;

    public function __construct(Task $objTask)
    {
        $this->objTask = $objTask;
        $this->arrOptions = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arrObjTasks = $this->objTask->fetchPaginateTasks($request);

        if($request->ajax()){
            return $arrObjTasks->toJson();
        } else {
            $this->getCommonDetails();
            return view('clients.tasks.index')
            ->with('jsonTasks', $arrObjTasks->toJson())
            ->with('options', $this->arrOptions->toJson());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->getCommonDetails();

        return view('clients.tasks.create')
        ->with('objTask', $this->objTask)
        ->with('options', $this->arrOptions->toJson());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $objRequest
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTaskRequest $objRequest)
    {
        if ($this->objTask->saveTask($objRequest)) {
            return parent::passResponse('Task created successfully.');
        }

        return parent::failedResponse();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tasks\Task $objTask
     * @return \Illuminate\Http\Response
     */
    public function show($intId)
    {
        return $this->edit($intId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tasks\Task $objTask
     * @return \Illuminate\Http\Response
     */
    public function edit($intId)
    {
        $this->getCommonDetails();

        $objTask = $this->objTask->with('taskNotes')->find($intId);

        $objTask->watchers = $objTask->taskWatchers()->pluck('assignee_id')->toArray();

        return view('clients.tasks.create')
        ->with('objTask', $objTask)
        ->with('options', $this->arrOptions->toJson());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $objRequest
     * @param \App\Models\Tasks\Task $objTask
     * @return \Illuminate\Http\Response
     */
    public function update($intId, SaveTaskRequest $objRequest)
    {
        if ($this->objTask->saveTask($objRequest, $intId)) {
            return parent::passResponse('Task updated successfully.');
        }

        return parent::failedResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tasks\Task $objTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $objTask)
    {
        //
    }

    public function postNote($intId)
    {
        $objTask = $this->objTask->find($intId);

        $objTaskNote = new TaskNote();

        $objTaskNote->task_id = $objTask->id;
        $objTaskNote->note = request('note');
        $objTaskNote->save();

        $objTask = $this->objTask->with('taskNotes')->find($intId);

        return $objTask->taskNotes;
    }
}
