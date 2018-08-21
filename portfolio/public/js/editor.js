ClassicEditor.create(document.querySelector('#editor'), {

    ckfinder: {
        uploadUrl: '/vendor/ckfinder/ckfinder-laravel-package/_connector/connector.php?command=QuickUpload&type=Files&responseType=json'
    }

    }).then(editor => {        
        console.log(editor);
    }).catch(error => {
        console.error(error);
});
