@extends('curd.vip.layout._layout')

@section('content')
<form action="{{route('vip/update')}}" method="POST" class="mt-5">
@csrf
<label for="name">Name</label>
<input type="text" name="name" placeholder="Enter Your name" class="form-control" value="{{$vip->name}}" required>
<label for="email">Email</label>
<input type="email" name="email" placeholder="Enter Your Email" class="form-control" value="{{$vip->email}}" required>
<label for="phone">Phone</label>
<input type="number" name="phone" placeholder="Enter Your Phone" class="form-control" value="{{$vip->phone}}" required>
<label for="priority">Priority</label>
<select name="priority" id="" class="form-control">
    <option value="1" {{$vip->priority==1?"selected":""}}>1</option>
    <option value="2" {{$vip->priority==2?"selected":""}}>2</option>
    <option value="3" {{$vip->priority==3?"selected":""}}>3</option>
    <option value="4" {{$vip->priority==4?"selected":""}}>4</option>
</select>
<label for="active">Active</label>
<select name="active" id="" class="form-control">
    <option value="0" {{$vip->avtive==0?"selected":""}}>Inactive</option>
    <option value="2" {{$vip->active==1?"selected":""}}>Active</option>
</select>
<button class="btn btn-outline-info mt-3 px-5 py-2">Update</button>
<input type="hidden" name="id" class="form-control" value="{{$vip->id}}" required>
</form>
@endsection