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
            $('.credit-report-button').on('click', function(){

                console.log('thing clicked!');
                //fetch credit report
                $.ajax({
                    type: 'GET',
                    url: 'fetch_credit_report.php',
                    dataType:'html',
                    success: function(credit_report_resp){
                        console.log(credit_report_resp);

                        console.log(typeof(credit_report_resp));


                        // console.log(credit_report_resp.getElementsByTagName('html'));

                        // var findStuff = $.parseXML(credit_report_resp);


                        // console.log(findStuff);

                        // //let's see what vanilla javascript can do
                        // var parser = new DOMParser();
                        // var xmlDoc = parser.parseFromString()


                        //make a tempDiv
                        // var tempDiv = $('<div>').append($(credit_report_resp));
                        // console.log('here it is turned into a tempDiv',tempDiv);


                        //stick the response straight into a div and hope for the best
                        //
                        // var tempDiv = $('<div>').append($(resp));
                        //
                        // $('#credit-report-target').html(tempDiv.html());


                        //store the credit report locally
                        //reassign the buttons' click handler to another function that just grabs the locally stored credit report. No need to fetch what you already have!

                    }
                })


            });
        },
        error: function(resp){
            console.log('something went wrong retrieving data', resp);
        }
    });

});