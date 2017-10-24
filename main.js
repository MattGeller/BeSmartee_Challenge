var credit_report_document_nodes = null;

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
                        console.log('here\'s the whole thing as a string',credit_report_resp);

                        var parser = new DOMParser();

                        var htmlDoc = parser.parseFromString(credit_report_resp, 'text/html');

                        console.log("here it is as a proper document",htmlDoc);

                        var justTheBodies = htmlDoc.getElementsByTagName('body');

                        console.log('here are just the bodies', justTheBodies);

                        console.log('here is the content of the body', justTheBodies[0]);

                        var tableArray = $(justTheBodies[0]).find('table');

                        console.log('there are a bunch of tables in the body', tableArray);

                        //dump all those tables into a div just to see what happens

                        // for (let i = 0, $targetDiv = $('credit-report-target'); i < tableArray.length; i++){
                        //     $targetDiv.append(tableArray[i]);
                        // }

                        console.log('here is one of them', tableArray[0]);


                        // var allChildren = justTheBodies[0].childNodes;

                        var credit_report_document_nodes = $(justTheBodies[0]).children();

                        console.log('here are all of the children', credit_report_document_nodes);

                        //add every single child to the dom
                        // for (let i = 0; i < allChildren.length; i++){
                        //     document.body.appendChild(allChildren[i]);
                        // }

                        var targetDiv = document.getElementById('credit-report-target');

                        console.log('targetDiv', targetDiv);

                        //put every single child into a div instead
                        for (let i = 0; i < credit_report_document_nodes.length; i++){
                            targetDiv.appendChild(credit_report_document_nodes[i]);
                        }


                        // for (let i = 0; i < tableArray.length; i++){
                        //     document.body.appendChild(tableArray[i]);
                        // }

                        //on second thought, just put one
                        // $('credit-report-target').append(tableArray[0])
                        // document.body.appendChild(tableArray[0])

                        //stick the body straight on to a div and find out what will happen
                        // $('credit-report-target').html(justTheBodies[0])


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