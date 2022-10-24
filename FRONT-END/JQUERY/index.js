$(document).ready(function () {
    $('#home').click(function () {
        $("#main_box").load("ajax_load/home.php");
    });
});


console.log($(".tab-box.active-div").find('.selectedBank').val());


$(document).on('change', '#extra_field_data', function () {
    // var type = $(this).find(':selected').data('value');
    // $('#extra_field_data').val();
    var extra_field_data = console.log($('#extra_field_data').val());
});


$(document).on('click', '.addNewLbl', function () {
    var item = "";
    var ansId = new Date().getTime();

    item += '<div id="del_' + ansId + '" class="row mb-not-last-10">';
    item += '<div class="col-md-10">';
    item += '<input name="extraDataValues[]" type="text" class="extraDataValues" placeholder="">';
    item += '</div>';
    item += '<div class="col-md-2 pr-0">';
    item += '<button class="img-but img-delete btn-sg-delete mt-10" onclick="hideDiv(' + ansId + ')" type="button"></button>';
    item += '</div>';
    item += '</div>';

    $('.Lbl-wrp').append(item);

});