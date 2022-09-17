<script>

    const uppy_{{ $name }} = new Uppy.Core({
        
        restrictions: {
            
            maxNumberOfFiles: 1,

            maxFileSize: 4194304,

            @if($onlyImages === 'true')

            allowedFileTypes: ["image/*", ".jpg", ".jpeg", ".png", ".gif"],

            @endif
        
        }, autoProceed: true})
    
    uppy_{{ $name }}
    
    .use(Uppy.FileInput, { target: '#{{ $name }}-UppyInput', pretty: true })
    
    .use(Uppy.XHRUpload, {
    
        endpoint: "",
        
        formData: true,
    
        fieldName: '{{ $name }}',
        
        headers: {
        
        "X-CSRF-TOKEN": "{{ csrf_token() }}",
        
        },
        
        getResponseData (responseText, response) {
        return {
            folder: responseText,
        }
        }
    })
    
    .use(Uppy.StatusBar, {
    
        target: '#{{ $name }}-UppyInput-Progress',
        
        hideUploadButton: true,
        
        hideAfterFinish: false
    
    })
    
    
    uppy_{{ $name }}.on('upload-success', (file, response) => {
    
    const elemn = document.querySelector("#{{ $name }}");
    
    elemn.value = response.body.folder;
    
    });
    
    </script>