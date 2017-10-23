$(document).ready(function(){
    console.log('document ready');

    //TODO: use ajax to get data from my server
    $.ajax({
        type: 'GET',
        url: 'main.php',
        dataType: 'xml',
        success: function(resp){
            console.log('resp',resp);
            //TODO: add table to dom
            //put the xml tree into a tempdiv
            var tempDiv = $('<div>').append($(resp).find('table'));

            //make the contents of temp div into a plantext string and then into the target as actual html
            $('#table-target').html(tempDiv.html());

            //TODO: add a click handler to name of credit that loads the entire credit report in a new div below the table. Also add a clear button to clear it!
        },
        error: function(resp){
            console.log('something went wrong retrieving data', resp);
        }
    });

});