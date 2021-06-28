@extends('curd.customer.layout._layout')

@section('content')
<table class="table table-hover table-striped table-dark text-center">
    <div class="container my-5">
        <form action="{{route('customer')}}" method="get">
        <button type="submit" class="btn btn-info" >Create</button></form>
    </div>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>           
            <td>
                {{$customer->id}}
            </td>
            <td>
                {{$customer->name}}
            </td>
            <td>
                {{$customer->email}}
            </td>
            <td>
                {{$customer->phone}}
            </td>            
            <td>
                <form action="{{route('customer/edit',$customer->id)}}" method="get">
                    <button type="submit" class="btn btn-outline-warning">
                        <i class="far fa-edit fa-2x"></i>
                    </button>
                </form>
            </td>
            <td>
                <form action="{{route('customer/destroy',$customer->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">
                    <i class="far fa-trash-alt fa-2x"></i>
                    </button>
                </form>
            </td>            
        </tr>
    @endforeach
    </tbody>
</table>
@endsection