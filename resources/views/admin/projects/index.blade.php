@extends ('layouts.app')

@section('content')
<div class="container mt-5">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
      @forelse ($projects as $project)
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->title}}</td>
        <td>{{$project->created_at}}</td>
        <td>{{$project->updated_at}}</td>
        <td></td>
      </tr> 
      @empty
      <tr>
        <td colspan="5">Projects not found</td> 
      </tr>
      @endforelse
    </tbody>
  </table>

  {{$projects->links('pagination::bootstrap-5')}}

</div>
    
@endsection