@extends('layout.apps')

@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Add New User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Name --}}
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <div class="pw-wrapper">
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            <button type="button" class="pw-toggle" data-target="password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="pw-wrapper">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror" required>
                            <button type="button" class="pw-toggle" data-target="password_confirmation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Role --}}
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

                    {{-- Profile Image --}}
                    <div class="form-group col-md-6">
                        <label for="imageInput">Image Profile</label>
                        <input type="file" name="image" id="imageInput"
                            class="form-control @error('image') is-invalid @enderror"
                            accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                        @error('image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <div class="mt-3">
                            <img id="previewImage" src="#" alt="Preview"
                                style="display:none; width:120px; height:120px; object-fit:cover; border-radius:8px; border:1px solid #ddd; padding:4px;">
                        </div>
                    </div>

                </div>{{-- end .row --}}

                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary">Create User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>

            </form>
        </div>
    </div>

    <style>
        /* Wrapper makes the input fill it, button sits on top */
        .pw-wrapper {
            position: relative;
        }

        /* Give the input enough right padding so text never hides under the icon */
        .pw-wrapper .form-control {
            padding-right: 42px !important; /* !important overrides Bootstrap is-invalid padding */
        }

        /* The toggle button floats inside the input on the right */
        .pw-toggle {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;          /* exactly as tall as the input */
            width: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            cursor: pointer;
            color: #6c757d;
            z-index: 10;           /* sits above the input */
            padding: 0;
        }

        .pw-toggle:focus {
            outline: none;
        }

        .pw-toggle:hover svg {
            stroke: #343a40;
        }
    </style>
@endsection

@push('scripts')
<script>
    const eyeOpen = `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`;
    const eyeOff  = `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/>`;

    document.querySelectorAll('.pw-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var inputId = btn.getAttribute('data-target');
            var input   = document.getElementById(inputId);
            var svg     = btn.querySelector('svg');

            if (!input || !svg) return;

            var showing    = input.type === 'text';
            input.type     = showing ? 'password' : 'text';
            svg.innerHTML  = showing ? eyeOpen : eyeOff;
        });
    });

    // Image preview
    document.getElementById('imageInput').addEventListener('change', function (e) {
        var file    = e.target.files[0];
        var preview = document.getElementById('previewImage');
        if (file) {
            var reader = new FileReader();
            reader.onload = function (ev) {
                preview.src           = ev.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
        }
    });
</script>
@endpush