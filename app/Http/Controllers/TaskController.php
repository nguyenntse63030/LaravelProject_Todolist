<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function create(){

        $tasks = Tasks::get()->Where('username', session()->get('Auth')->username);

        return view('LoginSuccess.User',compact('tasks'));
    }

    public function store(){

        Tasks::create([

            'username' => session()->get('Auth')->username,
            'taskName' => request('taskName'),
            'status' => 'In Progress',

        ]);

        return back();
    }

    public function updateStatus(){

        $statusButton = request("sttButton");
        $taskID = request("taskID");

        if ($statusButton == 'In Progress'){

            DB::table('tasks')
                ->where('id', $taskID)
                ->update(['status' => 'Done']);
        } else {

            DB::table('tasks')
                ->where('id', $taskID)
                ->update(['status' => 'In Progress']);

        }

        return back();
    }

    public function delete(Tasks $tasks){

        DB::table('tasks')
            ->where('id', $tasks->id)
            ->delete();

        return back();
    }
}
