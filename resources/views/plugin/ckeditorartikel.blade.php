@push('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
            max-height: 450px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endpush
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contentTextarea = document.querySelector('#content');
        
        if (!contentTextarea) {
            console.error('Textarea #content tidak ditemukan!');
            return;
        }
        
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        const data = new FormData();
                        data.append('upload', file);
                        data.append('_token', '{{ csrf_token() }}');

                        fetch('{{ route("upload") }}', {
                            method: 'POST',
                            body: data
                        })
                        .then(response => response.json())
                        .then(result => {
                            if (result.url) {
                                resolve({
                                    default: result.url
                                });
                            } else {
                                reject(result.error || 'Upload failed');
                            }
                        })
                        .catch(error => {
                            reject('Upload failed: ' + error);
                        });
                    }));
            }

            abort() {
                // Handle abort
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }
        
        ClassicEditor
            .create( contentTextarea, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', '|', 'bulletedList', 'numberedList', 'blockQuote', '|', 'uploadImage', 'insertTable', 'mediaEmbed', '|', 'undo', 'redo'],
                extraPlugins: [MyCustomUploadAdapterPlugin],
                image: {
                    toolbar: ['imageTextAlternative', '|', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side'],
                    styles: ['full', 'side', 'alignLeft', 'alignCenter', 'alignRight']
                }
            })
            .then(editor => {
                console.log('CKEditor berhasil dimuat dengan upload image!', editor);
                
                // Store editor instance globally
                window.editorInstance = editor;
                
                // Sync CKEditor data to textarea on form submit
                const form = document.querySelector('#article-form');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        // Get data from CKEditor and set to textarea
                        const data = editor.getData();
                        contentTextarea.value = data;
                    });
                }
            })
            .catch( error => {
                console.error( 'CKEditor error:', error );
            } );
    });
</script>
@endpush
