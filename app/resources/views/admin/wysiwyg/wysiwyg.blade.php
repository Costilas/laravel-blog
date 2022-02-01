<script src="{{ asset('assets/admin/ckeditor/build/ckeditor.js') }}"></script>
<script src="{{ asset('assets/admin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '#content' ), {
            ckfinder: {
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            alignment: ['left', 'right'],
            toolbar: [ 'heading', '|', 'ckfinder', '|','bold', 'italic', 'alignment', '|', 'undo', 'redo'],
        } )
        .catch( function( error ) {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#description' ), {
            alignment: ['left', 'right'],
            toolbar: [ 'heading', '|', 'bold', 'italic', 'alignment', '|', 'undo', 'redo' ],
            language: 'ru',
        } )
        .catch( function( error ) {
            console.error( error );
        } );
</script>
