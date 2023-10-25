@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <a class="btn btn-outline-primary" href="{{route('admin.projects.index')}}">Return to list</a>
  <hr>
  <h1>{{$project->title}}</h1>
  <div class="row g-3 mt-3">
    <div class="col-12">
      <strong>Id:</strong> {{$project->id}}
    </div>
    <div class="col-12">
      <strong>Slug:</strong> {{$project->slug}}
    </div>
    <div class="col-12">
      <strong>Repo:</strong> {{$project->repo}}
    </div>
    <div class="col-12">
      <strong>Created at:</strong> {{$project->created_at}}
    </div>
    <div class="col-12">
      <strong>Updated at:</strong> {{$project->updated_at}}
    </div>
    <div class="col-12">
      <strong>Description:</strong> {{$project->description}}
    </div>
  </div>
</div>
    
@endsection