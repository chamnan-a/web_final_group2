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
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <form action="{{ route('user1.destroy', $user->id) }}" onsubmit="return confirm('Are you sure you want to delete this user?');" method="POST">
                        <a class="btn btn-info" href="{{ route('user1.show', $user->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('user1.edit', $user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
@endsection
