<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class C_Todo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $todo_lists = Todo::paginate(10);

            return view('home', compact('todo_lists'));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTodo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $td_name = $request->input('title');
        $td_des = $request->input('des');

        Todo::create([
            'td_name' => $td_name,
            'td_des' => $td_des,
            'td_status' => false,
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data['todo'] = Todo::find($id);

        return view('editTodo', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $todo_list = Todo::find($id);
        $todo_list->td_name = $request->input('editName');
        $todo_list->td_des = $request->input('editDes');
        $todo_list->save();

        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $is_deleted = Todo::find($id)->delete();
        if ($is_deleted) {
            return redirect('/home');
        } else {
            return redirect()->route('tasks.index')
                ->with('message', 'Delete Fail!');
        }

    }
}
