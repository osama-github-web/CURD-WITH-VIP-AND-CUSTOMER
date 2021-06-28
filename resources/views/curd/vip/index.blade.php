@extends('curd.vip.layout._layout')

@section('content')
<form action="{{route('vip/create')}}" method="post" class="form mt-5 p-5">
@csrf
<label for="name">Name</label>
<input type="text" placeholder="Enter Your Name" name="name" class="form-control" required>
<label for="email">Email</label>
<input type="email" placeholder="Enter Your Email" name="email" class="form-control" required>
<label for="phone">phone</label>
<input type="number" placeholder="Enter Your Phone" name="phone" class="form-control" required>
<label for="priority">Priority</label>
<select name="priority" id="" class="form-control">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
<label for="active">Active</label>
<select name="active" id="" class="form-control">
    <option value="0">InActive</option>
    <option value="1">Active</option>
</select>
<button type="submit" class="btn btn-info px-4 py-2 mt-3">create</button>
</form>

@endsection