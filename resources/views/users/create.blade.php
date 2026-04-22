@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Add new user</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror" required>
                        @error('password_confirmation')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="roles"><strong>Role:</strong></label>
                        <select name="roles[]" id="roles"
                            class="form-control @error('roles') is-invalid @enderror">
                            <option value="">Please Select Role</option>
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}"
                                    {{ in_array($value, old('roles', [])) ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('roles')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="imageInput">Image Profile</label>
                        <input type="file" name="image" id="imageInput"
                            class="form-control @error('image') is-invalid @enderror"
                            accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                        @error('image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <div class="mt-2">
                            <img id="previewImage" src="#" alt="Preview"
                                style="display:none; width:120px; height:120px; object-fit:cover; border-radius:8px;">
                        </div>
                    </div>
                </div>

                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary">Create User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById('previewImage');

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>
@endpush