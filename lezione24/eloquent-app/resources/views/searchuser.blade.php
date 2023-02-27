<h3 class="text-center page-title">Search for user by ID</h3>
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ url('search') }}" method="POST">
    @csrf
    <div class="form-group">
        <input id="user_id" class="form-control" name="user_id" type="text" value="{{ old('user_id') }}"
            placeholder="User ID">
        @error('user_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <input class="btn btn-info" type="submit" value="Search">
</form>
