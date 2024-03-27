@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->salary }}</td>
                <td>
                    @if ($employee->image)
                        <img src="/images/{{ $employee->image }}" width="100px" alt="Employee Image">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <form action="{{ route('employees.destroy', $employee->id) }}" onsubmit="return confirm('Are you sure you want to delete this employee?');" method="POST">
                        <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}
@endsection
