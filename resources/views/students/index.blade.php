@extends('layout')

@section('page-content')
<a href={{ route('student.create') }}  class="btn btn-primary">Create</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cne</th>
            <th scope="col">first name</th>
            <th scope="col">second name</th>
            <th scope="col">age</th>
            <th scope="col">speciality</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $s)
        <tr>
            <th scope="row">{{$s->id}}</th>
            <td>{{$s->cne}}</td>
            <td>{{$s->firstName}}</td>
            <td>{{$s->secondName}}</td>
            <td>{{$s->age}}</td>
            <td>{{$s->speciality}}</td>
            <td> <a href={{ route('student.update', ['id'=>$s->id]) }} class="btn btn-secondary">Edit</a></td>
            <td> <a href="{{route('student.delete',['id'=>$s->id])}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
