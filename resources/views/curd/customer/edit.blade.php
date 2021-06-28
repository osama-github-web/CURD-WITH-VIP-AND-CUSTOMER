@extends('curd.customer.layout._layout')

@section('content')

<div class="container">
    <form method="POST" action="{{url('update')}}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="{{$customer->name}}" required>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" class="form-control" value="{{$customer->email}}" required>
        <label for="phone">Phone</label>
        <input type="number" name="phone" placeholder="Enter Your Phone" class="form-control" value="{{$customer->phone}}" required>
        <input type="hidden" name="id" class="form-control" value="{{$customer->id}}" required>
        <button type="submit" class="btn btn-danger mt-3 px-4 py-2">Update</button>
</div>
@endsection