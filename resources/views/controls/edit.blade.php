@extends('layout.apps')

@section('content')
<div class="card p-3">
    <div class="card-header">
        <h4 class="card-title">Update Control</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('controls.update', $system->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="form-group col-md-6">
                    <label>System Name</label>
                    <input type="text" name="name" class="form-control"
                        value="{{old('name',$system->name)  }}">
                </div>

                <div class="form-group col-md-6">
                    <label>Type</label>
                    <select class="form-control" name="type">
                        <option value="">Select Type</option>
                        <option value="Preventive" {{ $system->type == 'Preventive' ? 'selected' : '' }}>Preventive</option>
                        <option value="Detective" {{ $system->type == 'Detective' ? 'selected' : '' }}>Detective</option>
                        <option value="Corrective" {{ $system->type == 'Corrective' ? 'selected' : '' }}>Corrective</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="active" {{ $system->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $system->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ $system->description }}</textarea>
                </div>

                <!-- EXISTING IMAGE -->
               
                <!-- UPLOAD NEW IMAGE -->
                <div class="form-group col-md-12">
                    <label>Upload New Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control" accept="image/*">

                    <div style="margin-top:10px;">
                        <img id="image" style="max-width:100%; display:none;">
                    </div>

                    <input type="hidden" name="cropped_logo" id="cropped_logo">
                </div>
                 <div class="form-group col-md-12">
                    <label>Current Logo</label><br>

                    @if ($system->logo)
                        <img src="{{ asset('storage/' . $system->logo) }}"
                             style="height:80px; margin-bottom:10px;">
                    @else
                        <p>No image</p>
                    @endif
                </div>


                <div class="form-group col-md-12 d-flex justify-content-end">
                    <a href="{{ route('controls.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-success btn-sm ml-1">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let cropper;
    const input = document.getElementById('logo');
    const image = document.getElementById('image');

    input.addEventListener('change', function (e) {
        const file = e.target.files[0];

        if (file && file.type.startsWith('image/')) {
            const url = URL.createObjectURL(file);

            image.src = url;
            image.style.display = 'block';

            if (cropper) cropper.destroy();

            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 1,
                autoCropArea: 1,
            });
        }
    });

    document.querySelector('form').addEventListener('submit', function () {
        if (cropper) {
            const canvas = cropper.getCroppedCanvas({
                width: 300,
                height: 300,
            });

            document.getElementById('cropped_logo').value = canvas.toDataURL('image/png');
        }
    });
</script>
@endpush