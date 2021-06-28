@extends('curd.customer.layout._layout')

@section('content')
    <div class="container">
        <form action="{{route('customer/create')}}" method="post" class="mt-5">
            @csrf
            <label for="name" class="text-capitalize">Name</label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
            <label for="email" class="text-capitalize">Email</label>
            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
            <label for="phone" class="text-capitalize">phone</label>
            <input type="number" name="phone" placeholder="Enter Phone" class="form-control" required>
            <button type="submit" class="btn btn-danger mt-3 px-5 py-2">Create</button>
        </form>
    </div>
@endsection