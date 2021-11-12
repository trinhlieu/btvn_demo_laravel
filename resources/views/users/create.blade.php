<div class="card mt-2">
    <h5 class="card-header">Add new product</h5>
    <div class="card-body">
        <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror" >
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" value="{{ old('password') }}" class="form-control">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
