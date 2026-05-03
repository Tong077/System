@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Edit User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

               @method('PUT')

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name',$user->name) }}" >
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email',$user->email) }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" autocomplete="new-password" placeholder="Leave it blank if you don't want to update new password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" >
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="border-color: #ced4da;">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" autocomplete="new-password placeholder="Leave it blank if you don't want to update new password"  name="password_confirmation" id="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror" >
                            <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm" style="border-color: #ced4da;">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="roles"><strong>Role:</strong></label>
                        <select name="roles[]" id="roles"
                            class="form-control @error('roles') is-invalid @enderror">
                            <option value="">Please Select Role</option>
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}"
                                    {{ in_array($value, old('roles', $user->roles->pluck('name')->toArray())) ? 'selected' : '' }}>
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
                        <div class="mt-3">
                            <img id="previewImage" src="{{ $user->image_url ?? '#' }}" alt="Preview"
                                style="{{ $user->image_url ? '' : 'display:none;' }} width:120px; height:120px; object-fit:cover; border-radius:8px; border:1px solid #ddd; padding:4px;">
                        </div>
                    </div>
                </div>

                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Image preview
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById('previewImage');

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            // Reset to original image if file selection is cancelled
            @if ($user->image_url)
                preview.src = "{{ $user->image_url }}";
                preview.style.display = 'block';
            @else
                preview.style.display = 'none';
            @endif
        }
    });

    // Password toggle
    function setupPasswordToggle(toggleButtonId, passwordInputId) {
        const toggleBtn = document.getElementById(toggleButtonId);
        const passwordInput = document.getElementById(passwordInputId);

        if (toggleBtn && passwordInput) {
            toggleBtn.addEventListener('click', function (e) {
                e.preventDefault();
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                toggleBtn.innerHTML = isPassword ? '<i class="fas fa-eye-slash"></i>' : '<i class="fas fa-eye"></i>';
            });
        }
    }

    setupPasswordToggle('togglePassword', 'password');
    setupPasswordToggle('togglePasswordConfirm', 'password_confirmation');
</script>
@endpush