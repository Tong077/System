@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Create New Link</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('links.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}" required>
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="url">URL</label>
                        <input type="url" name="url" id="url"
                            class="form-control @error('url') is-invalid @enderror"
                            value="{{ old('url') }}" required>
                        @error('url')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="department">Department</label>
                        <input type="text" name="department" id="department"
                            class="form-control @error('department') is-invalid @enderror"
                            value="{{ old('department') }}" required>
                        @error('department')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <textarea name="description" id="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="1">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
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
                    <button type="submit" class="btn btn-primary">Save Link</button>
                    <a href="{{ route('links.index') }}" class="btn btn-secondary">Cancel</a>
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
