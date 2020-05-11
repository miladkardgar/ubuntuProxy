@extends('layout.master')
@section('content')
    <form action="{{route('addAccountSubmit')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Account Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
    <div class="links">
        <a href="/">Main Page</a>
    </div>
@endsection
