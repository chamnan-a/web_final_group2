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
            <th>Invoice ID</th>
            <th>Product ID</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($invoiceDescriptions as $key => $invoiceDescription)
            <tr>
                <td>{{ $key + $invoiceDescriptions->firstItem() }}</td>
                <td>{{ $invoiceDescription->invoice_id }}</td>
                <td>{{ $invoiceDescription->product_id }}</td>
                <td>{{ $invoiceDescription->price }}</td>
                <td>{{ $invoiceDescription->quantity }}</td>
                <td>{{ $invoiceDescription->total_price }}</td>
                <td>
                    <form action="{{ route('invoicedescriptions.destroy', $invoiceDescription->id) }}" onsubmit="if(!confirm('Are you sure to delete?')){return false;}" method="POST">

                        <a class="btn btn-info" href="{{ route('invoicedescriptions.show', $invoiceDescription->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('invoicedescriptions.edit', $invoiceDescription->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $invoiceDescriptions->links() !!}

@endsection
