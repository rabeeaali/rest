@push('js')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        const configs = {
            toolbar: [
                'heading',
                '|',
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                'blockQuote',
                'undo',
                'redo'
            ],
        };
        ClassicEditor
            .create(document.querySelector('#editor-one'), configs)
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor-two'), configs)
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
