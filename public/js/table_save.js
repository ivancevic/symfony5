/**
 * 
 */
var $table = $('.js-tables');
$table.find('tr a').on('click', function(e) {
    e.preventDefault();
    var $first = $(this).find('.first').text();
	var $last = $(this).find('.last').text();
	var $handle = $(this).find('.handle').text();
	console.log($handle);
    $.ajax({
        url: '/table/$first/$last/$handle',
        method: 'POST'
    }).then(function(response) {
        console.log(response);
    });
});