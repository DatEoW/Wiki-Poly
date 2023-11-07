@extends('admin.layout')
@section('container')
<h2>Add User</h2>
<form method="post" style="padding: 32px; max-width: 50%; border:solid 2px 
box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
-webkit-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
-moz-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41); margin:32px; border-radius : 10px">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="img">img</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div>
    {{-- <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" name="status">
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <input type="text" class="form-control" id="role" name="role">
    </div> --}}
    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
    {{-- @include('partials.formerrors') --}}
</form>

@endsection