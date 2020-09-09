@extends('layouts.admin')
@section('title', 'Liste des projets')
@section('page_title', 'Liste des projets')
@section('link_title', 'Liste des projets')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Liste des projets</h5>
                        <span>use class <code>table</code> inside table element</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                <li><i class="feather icon-trash close-card"></i></li>
                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Prix</th>
                                        <th>Catégories</th>
                                        <th>Utilisateurs</th>
                                        <th>Deadline</th>
                                        <th>L'urgence</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($projects as $project)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1}}</th>
                                        <td>{{$project->price}}</td>
                                        <td>{{$project->category->name}}</td>
                                        <td>{{$project->user->name}}</td>
                                        <td>{{$project->deadline}}</td>
                                        <td>{{$project->urgency}}</td>
                                        <td>$project->status</td>

                                        <td>
                                            <div class="row">
                                                <!--div class="col-6">
                                                    <a class="float-right" href="/admin/users/{{$user->id}}">
                                                        <i class="icon-pencil text-primary"></i>
                                                    </a>
                                                </div-->
                                                <div class="col-6">
                                                    <form action="{{ route('projects.destroy', $project) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button
                                                          id="test-id-unpublish-btn"
                                                          class="btn rounded"><i class="icon-trash text-danger"></i></button>
                                                    </form>
                                                </div>

                                            </div>



                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>


@endsection
