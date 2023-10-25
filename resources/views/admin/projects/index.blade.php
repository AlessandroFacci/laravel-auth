@extends ('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="container mt-5">

  <h1 class="mb-4">{{$title}}</h1>

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
        <td>
          <a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a>
        </td>
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