@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New STUDENTS</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $STUDENTS)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $STUDENTS->image }}" width="100px"></td>
                <td>{{ $STUDENTS->name }}</td>
                <td>{{ $STUDENTS->detail }}</td>
                <td>
                    <form action="{{ route('students.destroy',$STUDENTS->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('students.show',$STUDENTS->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('students.edit',$STUDENTS->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $students->links() !!}

@endsection
