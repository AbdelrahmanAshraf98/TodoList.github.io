<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class todoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('deadline','asc')->get();
        return view('todos.home')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.addtask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo  = new Todo();
        $this->validate($request,[
          'name' => 'required',
          'body' => 'required',
          'deadline' => 'required'
        ]);

        $todo->text = $request->input('name');
        $todo->deadline = $request->input('deadline');
        $todo->body = $request->input('body');
        $todo->save();
        return redirect('/')->with('success','todo added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $todo = Todo::find($id);
      return view('todos.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'name' => 'required',
          'body' => 'required',
          'deadline' => 'required'
        ]);

        $todo = Todo::find($id);
        $todo->text = $request->input('name');
        $todo->deadline = $request->input('deadline');
        $todo->body = $request->input('body');
        $todo->save();
        return redirect('/')->with('success','todo updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/')->with('success','Todo Deleted');
    }
}
