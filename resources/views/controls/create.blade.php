@extends('layout.apps')
@section('content')
    <div class="card p-3">
        <div class="card-header">
            <h4 class="card-title">Create Control</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('controls.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">System Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Please Enter System name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="type">Type</label>
                        <select class="form-control" name="type">
                            <option value="">Pleas select Type </option>
                            <option value="Preventive">Preventive</option>
                            <option value="Detective">Detective</option>
                            <option value="Corrective">Corrective</option>
                        </select>

                    </div>
                    <div class="form-group col-md-12">
                        <label for="status">Status</label>
                        <select class="form-control" name="status">
                            <option value="">Please select status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Image Logo</label>
                        <input type="file" name="logo" id="logo" class="form-control" accept="image/*">

                        <div style="margin-top:10px;">
                            <img id="image" style="max-width:100%; display:none;">
                        </div>

                        <!-- hidden input to send cropped image -->
                        <input type="hidden" name="cropped_logo" id="cropped_logo">
                    </div>

                    <div class="form-group d-flex justify-content-end col-md-12">
                        <a href="{{ route('controls.index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        <button type="submit" name="action" value="save_new" class="btn btn-sm btn-secondary ml-1">Save
                            new</button>
                        <button type="submit" class="btn btn-sm btn-success ml-1">Save Exist</button>
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

                if (cropper) {
                    cropper.destroy();
                }

                cropper = new Cropper(image, {
                    aspectRatio: 1, // square
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