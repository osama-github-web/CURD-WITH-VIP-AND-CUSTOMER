@extends('curd.vip.layout._layout')

@section('content')
<table class="table tabel-hover table-striped text-center table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Priority</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vips as $vip)
            <tr>
                <td>{{$vip->id}}</td>
                <td>{{$vip->name}}</td>
                <td>{{$vip->email}}</td>
                <td>{{$vip->phone}}</td>
                <td>{{$vip->priority}}</td>
                <td>{{$vip->active==1?"active":"in active"}}</td>
                <td>
                    <form action="{{route('vip/edit',$vip->id)}}" method="GET">
                        <button type="submit" class="btn btn-outline-warning"><i class="fa fa-edit fa-2x"></i></button>
                    </form>
                </td>
                <td>
                    <form action="{{route('vip/destroy',$vip->id)}}" method="POST">
                    @csrf
                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt fa-2x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection