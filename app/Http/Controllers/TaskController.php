<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use \Illuminate\View\View as ReturningView;
class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): ReturningView
    {
        $tasks = Task::query()->paginate(5)->items();

        return View::make('tasks.tasks')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): ReturningView
    {
        return View::make('tasks.createTask');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): ReturningView
    {
        $task = new Task([
            'name' => $request->get('name'),
            'text' => $request->get('text'),
            'checked' => $request->get('checked')
        ]);
        $task->save();

        return View::make('tasks.task')->with('task', $task);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): ReturningView
    {
        $task = Task::query()->findOrFail($id);
        return View::make('tasks.task')->with(['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): ReturningView
    {
        $task = Task::query()->findOrFail($id);

        return View::make('tasks.editTask')->with(['task' => $task]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): ReturningView
    {
        $task = Task::query()->findOrFail($id);

        $task->update([
            'name' => $request->get('name'),
            'text' => $request->get('text')
        ]);

        return View::make('tasks.task')->with('task', $task);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
