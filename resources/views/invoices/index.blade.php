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
            <th>User ID</th>
            <th>Date</th>
            <th>Address</th>
            <th>Employee ID</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $invoice->user_id }}</td>
                <td>{{ $invoice->date }}</td>
                <td>{{ $invoice->address }}</td>
                <td>{{ $invoice->employee_id }}</td>
                <td>
                    <form action="{{ route('invoices.destroy',$invoice->id) }}" onsubmit="if(!confirm('Are you sure to delete?')){return false;}" method="POST">

                        <a class="btn btn-info" href="{{ route('invoices.show',$invoice->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('invoices.edit',$invoice->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $invoices->links() !!}

@endsection
