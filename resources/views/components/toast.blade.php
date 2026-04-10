<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999">

    @if (session('success'))
        <div class="toast align-items-center text-bg-success border-0 show mb-2">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast align-items-center text-bg-danger border-0 show mb-2">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif

    @if (session('warning'))
        <div class="toast align-items-center text-bg-warning border-0 show mb-2">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('warning') }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif

    @if (session('info'))
        <div class="toast align-items-center text-bg-info border-0 show mb-2">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('info') }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let toastElList = [].slice.call(document.querySelectorAll('.toast'))
        toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                delay: 4000
            }).show()
        })
    });
</script>
