$("#seeAnotherField").change(function() {
    if ($(this).val() == "yes") {
        $('#otherFieldDiv').show();
        $('#otherField').attr('required', '');
        $('#otherField').attr('data-error', 'This field is required.');
    } else {
        $('#otherFieldDiv').hide();
        $('#otherField').removeAttr('required');
        $('#otherField').removeAttr('data-error');
    }
});
$("#seeAnotherField").trigger("change");

$('#send_btn').click(function() {

    var fname = $('#fname').val();
    var email = $('#email').val();
    var seeAnotherField = $('#seeAnotherField').val();
    var otherField = $('#otherField').val();
    var comment = $('#comment').val();
    var asunto = $('#seeAnotherField option:selected').attr('v');
    var subasunto = $('#otherField option:selected').attr('v');
    $.ajax({
        url: 'asset/mail/send_mail.php',
        type: 'post',
        data: {
            fname: fname,
            email: email,
            seeAnotherField: seeAnotherField,
            otherField: otherField,
            comment: comment,
            asunto: asunto,
            subasunto: subasunto
        },
        success: function(response) {
            console.log(response);
            var data = JSON.parse(response);
            if (data.status == 1) {
                alert("El mensaje fue enviado");
                $('#fname').val('');
                $('#email').val('');
                $('#seeAnotherField').val('');
                $('#otherField').val('');
                $('#comment').val('');
                $('#seeAnotherField').val('');
            } else {

            }
        },
        error: function(response) {
            alert(response);
        }
    });
})