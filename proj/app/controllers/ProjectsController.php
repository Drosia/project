<?php

class ProjectsController extends \BaseController {



    public static $session;

    public function index()
    {



        $projects = Projects::all();

        $session = Session::get('email');

        $user = User::all();
        foreach ($user as $key => $value) {
                    if ($session == $value->email) {
                        $iduser = $value->id ;

                    }
        }
        $tasks = Tasks::all();


        return View::make('projects.index')->with('projects', $projects)->with('session', $session)->with('iduser', $iduser)
        ->with('tasks', $tasks);
    }



    public function create()
    {
        return View::make('projects.create');

    }



    public function store()
    {


        $rules = array(
            'projects'       => 'required',
            
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('projects/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $projects = new Projects;

            $projects->projects = Input::get('projects');
            $projects->user_id = Session::get('id');
            $projects->save();


            Session::flash('message', 'Successfully created projects!');
            return Redirect::to('projects');
        }
    }



    public function show($id)
    {

        $projects = Projects::find($id);


        return View::make('projects.show')->with('projects', $projects);
    }



    public function edit($id)
    {

        $projects = Projects::find($id);
 

        return View::make('projects.edit')->with('projects', $projects);
    }



    public function update($id)
    {
        

        $rules = array(
            'projects'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('projects/' . $id . '/edit')
                ->withErrors($validator);
        } else {

            $projects = Projects::find($id);
            $projects->projects = Input::get('projects');
            $projects->save();

            Session::flash('message', 'Successfully updated projects!');
            return Redirect::to('projects');
        }
    }


    public function destroy($id)
    {

        $projects = Projects::find($id);
        $tasks = Tasks::all();
        foreach ($tasks as $key => $value) {
 
            if ($value->project_id == $projects->id) {

        $task = Tasks::find($value->id);
        $task->delete();
            }

        }

       
        $projects->delete();


        Session::flash('message', 'Successfully deleted the project!');
        return Redirect::to('projects');
    }

}