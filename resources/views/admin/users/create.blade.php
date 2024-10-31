@extends('admin.masterlayout')

@section('title', 'Add users')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add users</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <form method="POST" action="{{route('admin.users.handle-user-create')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" value="{{old('name')}}">
            @error('name')
                <span>
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number" value="{{old('phone_number')}}">
            @error('phone_number')
                <span>
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="{{old('password')}}">
            @error('password')
                <span>
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Confirm Password" value="{{old('password-confirmation')}}">
            @error('password-confirmation')
                <span>
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar">Profile picture(Should leave it to the guest to please)</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
            @error('avatar')
                <span>
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
  <!-- /.container-fluid -->
</div>
@endsection
