<?php

class TasksController extends \BaseController {





    public function index($id)
    {

        $tasks = Tasks::all();

        $session =$id;

        foreach ($tasks as $key => $value) {
                    if ($session == $value->project_id) {
                        $iduser = $value->project_id ;

                    }
        }


        return View::make('tasks.index')->with('tasks', $tasks)->with('session', $session)->with('iduser', $iduser);
    }



    public function create($id)
    {
        
        return View::make('tasks.create')->with('session', $id);


    }




    public function store($id)
    {


        $rules = array(
            'tasks'       => 'required',
            
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('tasks/create')
                ->withErrors($validator);
        } else {


            $tasks = new Tasks;
            $tasks->tasks = Input::get('tasks');
            $tasks->project_id = $id;
            $tasks->description = Input::get('description'); 

            $tasks->save();


            Session::flash('message', 'Successfully created tasks!');
            return Redirect::to('tasks/'.$id.'/proj');
        }
    }


    public function show($id)
    {

        $tasks = Tasks::find($id);


        return View::make('tasks.show')->with('tasks', $tasks)->with('session', $tasks->project_id);
    }


    public function edit($id)
    {

        $tasks = Tasks::find($id);


        return View::make('tasks.edit')->with('tasks', $tasks)->with('session', $tasks->project_id);
    }


    public function update($id)
    {

        
        $rules = array(
            'tasks'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('tasks/' . $id . '/edit')
                ->withErrors($validator);
        } else {


            $tasks = Tasks::find($id);
            $tasks->tasks = Input::get('tasks');
            $tasks->description = Input::get('description');           
            $tasks->save();


            Session::flash('message', 'Successfully updated tasks!');
            return Redirect::to('tasks/'.$tasks->project_id.'/proj');
        }
    }
       


    public function destroy($id)
    {


        $tasks = Tasks::find($id);
        $tasks->delete();


        Session::flash('message', 'Successfully deleted the Task!');

        $task = Tasks::all();

        foreach ($task as $key => $value) {

        if ($value->id) {

        return Redirect::to('tasks/'.$tasks->project_id.'/proj');

    }
       }
        return Redirect::to('projects');
  
}
}