$(document).ready(function(){
	$('#main-bp img.slide').slideshowify();
	$('html').niceScroll();
	$('.modal').modal();
})


$('#send-contact').on('click', function(){
	sendContact();
})

function sendContact() {
    var f = $('#contact-form');
    var data;
    if(validate(f)) {
        data = getFormData(f);
        var msg = "Contact message from GTC\n\n";
        msg += "\nName: " + data.name +
        "\nEmail: " + data.mail +
        "\nMessage: " + data.msg;
        console.log(msg);
        sendMail('no-reply@gtc.claresti.com', 'zimoo354@gmail.com', 'Contact message from GTC', msg, function(){
            swal('Correcto', 'Tus datos fueron recibidos con éxito', 'success');
            f.find('[name]').val("");
        });
    };

}

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

function validate($form) {
    if (!$form[0].checkValidity()) {
        $form.find('input[type="submit"]').click();
        return false;
    }
    return true;
}


function sendMail(from, to, subject, msg, callback) {
    var m = new mandrill.Mandrill('lFwDXkU9JM-pHtBjKKUV9g');
    var params = {
        "message": {
            "from_email": from,
            "to":[{"email": to},
                ],
            "subject": subject,
            "text": msg
        }
      };
      m.messages.send(params, function(r) {
          console.log(r);
          callback();
        }, function(e) {
          console.log(e);
        });   
}