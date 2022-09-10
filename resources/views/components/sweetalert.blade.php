@if (session('success'))
    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'close',
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'sweet-alert-button'
                },
            })
        </script>
    @endpush
@endif

{{--
<script>
    Swal.fire({
        title: 'Error!',
        text: "you have errors in your form ",
        icon: 'error',
        confirmButtonText: 'close',
        buttonsStyling: false,
        customClass: {
            confirmButton: 'sweet-alert-button'
        },
    })
</script>
--}}
