function exportExcel() {

window.location = '<?php echo Yii::app()->request->baseUrl; ?>/empDetailsReport/Export/?' + $('#search-form').serialize();

}

$('form').each(function() {
$("#cvContent-form").validate({
submitHandler: function() {
addCvContent();
}
});
});



<script>
    Dropzone.autoDiscover = false;

    function uploadDocuments() {

        var id = $('#fileName').val();
        var myAwesomeDropzone = new Dropzone("#myDropzone", {
            url: http_path + 'taskManagement/uploadIsssueReleatedDocs',
            maxFiles: 100,
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.xlsx,.xla,.xls,.csv,.ppt,.ptx,.txt,.doc,.docx,.bmp,.tiff",
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("id", $('#curretIssueID').val());
                });
            },
        });
        myAwesomeDropzone.on("success", function(file, response) {
            file.blog_img = response;
            var dst = JSON.parse(response);
            //$('#notes-list').append(dst.msg.htmlResponse);

            $('<input>').attr({
                type: 'hidden',
                name: 'issueAttachements[]',
                value: dst.msg.filepathAtt,
            }).appendTo('#fileAttachementDataDiv');
        });
        myAwesomeDropzone.on("removedfile", function(file) {
            if (!file.blog_img) {
                //alert('Sorry, the file could not be deleted.');
            } else {
                /*var dataString = file.blog_img;
                $.ajax({
                    type: "POST",
                    url: http_path + 'taskManagement/deleteAttachedFiles',
                    data: {
                        'file_name' : dataString
                    },
                    beforeSend: function () {
                    },
                    success: function (response) {
                        var res = JSON.parse(response);
                        if(res.code == 201){
                            $('#box_'+res.msg.msg).remove();
                        }
                    }
                });*/
            }
        });
    }

    function uploadOtherBankPassBook() {
        var id = 2;
        // console.log(ref_doc_id);
        Dropzone.autoDiscover = false;
        var myAwesomeDropzone = new Dropzone("#myDropzone_otherBank_passbook_copy", {
            url: http_path + 'empDetails/SelfRequestedBankDocuments/' + id,
            maxFiles: 1,
            maxFilesize: 5,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.pdf,.PDF",
            // data: "ref_doc_id=" + $("#ref_doc_id").val(),
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("ref_doc_id", $("#ref_doc_id").val());
                });
            },
        });
        JSON.stringify()

        myAwesomeDropzone.on("success", function(file, response) {
            file.blog_img = response;
            // $("#ref_doc_id").val(response);
            // var ref_doc_id = $("#ref_doc_id").val(response);
        });

        myAwesomeDropzone.on("removedfile", function(file) {
            var fileName = file.name;
            $.ajax({
                type: "POST",
                url: http_path + 'empDetails/deleteBulkEmpImages',
                data: {
                    'fileName': fileName
                },
                beforeSend: function() {
                    /* alert(file.tender_doc_img); */
                },
                success: function(response) {
                    // alert(response);
                }
            });

        });

    }
</script>