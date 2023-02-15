@extends('layouts.main')

@section('title', 'User Detail')

@section('content')
<h1>User Detail</h1>

<div class="mt-4 d-flex justify-content-end">
    @if($user->status == 'inactive')
    <a href="/users-approved/{{$user->slug}}" class="btn btn-primary me-3">Approved User</a>
    <a href="/user-registered" class="btn btn-secondary">Back</a>
    @else
    <a href="/user" class="btn btn-secondary">Back</a>
    @endif
</div>

<div class="mt-4">
    @if(session('status'))
<div class="alert alert-success mt-3">
    {{ session('status') }}
</div>
@endif

    <div class="mb-3">
    <label for="" class="form-label">Username</label>
    <input type="text" class="form-control" readonly value="{{$user->username}}">
</div>
</div>
<div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="text" class="form-control" readonly value="{{$user->phone}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input type="text" class="form-control" readonly value="{{$user->address}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Status</label>
    <input type="text" class="form-control" readonly value="{{$user->status}}">
</div>
@endsection