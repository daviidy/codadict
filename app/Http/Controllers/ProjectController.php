<?php

namespace App\Http\Controllers;

use App\Project;
use Auth;
use App\User;
use App\Multimedia;
use Validator;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                $projects = Project::orderby('id', 'asc')->where('user_id', Auth::id())->paginate(30);
                return view('users.user_admin.projects.index', ['projects' => $projects]);
            }
            else {
                $projects = Project::orderby('id', 'asc')->where('user_id', Auth::id())->paginate(30);
                return view('projects.index', ['projects' => $projects]);
            }
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('projects.create');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::create($request->all());

        $validation = Validator::make($request->all(), [
              'input2.*' => 'required|file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
          ],[
              'input2.*.required' => 'Please upload a file',
                'input2.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
                'input2.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

        if ($validation->passes()) {
            if ($request->hasFile('input2') ) {
              foreach ($request->file('input2') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'project_id' => $project->id,
                ]);
                $file->move(storage_path('app/public/files/projects'), $filename);
              }
          }
        }

        $project->status = 'submitted';
        $project->save();

        return redirect('projects')->with('status', 'Votre projet a été crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return view('users.user_admin.projects.show', ['project' => $project]);
            }
            else {
                return view('projects.show', ['project' => $project]);
            }

        }
        else {
            return redirect('home');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        if (Auth::check()) {
            return view('projects.default.edit', ['project' => $project]);
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        $validation = Validator::make($request->all(), [
              'input2.*' => 'required|file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
          ],[
              'input2.*.required' => 'Please upload a file',
                'input2.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
                'input2.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

        if ($validation->passes()) {
            if ($request->hasFile('input2') ) {
              foreach ($request->file('input2') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'project_id' => $project->id,
                ]);
                $file->move(storage_path('app/public/files/projects'), $filename);
              }
          }
        }
        return redirect()->back()->with('status', 'Votre projet a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (Auth::check()) {
            $project->delete();
            return redirect('projects')->with('status', 'Votre projet a été supprimé avec succès');
        }
        else {
            return redirect('home');
        }

    }
}
