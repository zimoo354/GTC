var counter = 1;

$(document).ready(function(){
	$('.modal').modal();

    $.get('http://localhost/geiq/form?c=' + counter, function(r){
        $('#main-form #content').html(r);
        $('#main-form #content').fadeIn('slow');
        counter++;
    });

})

function queryGTC() {
	var values = [];
	$('input.value').each(function(i,e){
		values.push($(e).val())
	});
	var data = {
		'values': values
	};
	console.log(data);
	$.get('http://localhost/geiq/api', data, function(r){
		console.log(r);
	})
}

function readAllBundles() {
	var bundles = [];
	var current_bundle = [];
	$('.card').each(function(i,e){
		current_bundle = [];
		$(e).find('input').each(function(i,e){
			current_bundle.push($(e).val());
		});
		bundles.push(current_bundle);
	});
	var infoJsonEncoded = {
		data: bundles
	};
	return infoJsonEncoded;
}

function addCard() {
    $.get('http://localhost/geiq/form?c=' + counter, function(r){
        $('#main-form #content').append(r);
        scrollAnimate('bundle-' + counter);

        counter++;
    });
}

function removeCard(e){
	if (counter > 2) {
		$(e).parents('.card').slideUp('slow');
		setTimeout(function(){$(e).parents('.card').remove();},500)
		counter--;
	} else {
		swal('Wait', "You can't have nothing bundles", 'warning');
	}
}

$('[data-scroll]').on('click', function(){
	 enlace  = $(this).data('scroll');
	 scrollAnimate(enlace);
})

function scrollAnimate(enlace){
	$('html, body').animate({
		scrollTop: $('#' + enlace).offset().top - 80
	}, 1000);
}

$('#send-info').on('click', function(){
	$('.card').slideUp('slow');
	setTimeout(function(){

		$('#content').append(
			$('<div>')
			.addClass('loader row card pad-und-xs display-none')
			.append(
				$('<div>')
					.addClass('s12 col')
					.append(
						$('<img>')
							.attr('src','img/spinner.png')
							.addClass('spinner')
					)
					.append(
						$('<h6>')
							.html("Wait, we're processing your data")
					)

			)
		);
		$('#content .loader').slideDown();

	}, 500);
})
