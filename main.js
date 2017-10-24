var credit_report_document_nodes = null;

$(document).ready(function(){
    console.log('document ready');

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

            $('.credit-report-button').on('click', function(){
                //fetch credit report
                $.ajax({
                    type: 'GET',
                    url: 'fetch_credit_report.php',
                    dataType:'html',
                    success: function(credit_report_resp){
                        // credit_report_resp comes back as a string

                        //use the DOMParser to parse the html string into an html document
                        var parser = new DOMParser();
                        var htmlDoc = parser.parseFromString(credit_report_resp, 'text/html');

                        //select all the children in the body of the htmlDoc and store them as a global variable
                        credit_report_document_nodes = $(htmlDoc.getElementsByTagName('body')).children();

                        //function to get html nodes out of global variable
                        function populate_from_local(){
                            var targetDiv = document.getElementById('credit-report-target');

                            //append every element in credit_report_document_nodes to the div
                            for (let i = 0; i < credit_report_document_nodes.length; i++){
                                targetDiv.appendChild(credit_report_document_nodes[i]);
                            }

                            //make a clear button
                            var $clearButton = $('<button>').addClass('btn btn-outline-primary');
                            $clearButton.attr('type', 'button');
                            $clearButton.text('Clear');
                            $clearButton.on('click', function () {
                                //clear contents of credit-report-target
                                $('#credit-report-target').empty();

                                //also clear itself
                                $('#button-panel').empty();

                                //put the proper click handler back on
                                $('.credit-report-button').on('click', populate_from_local);
                            });

                            $('#button-panel').append($clearButton);

                            //this function removes itself as a click handler
                            $('.credit-report-button').off('click');
                        }

                        // $('.credit-report-button').on('click', populate_from_local);
                        /**to here these should be in the click handler for the clear button*/

                        //click handlers are removed from credit-report-buttons. the initial click handler will never be reapplied, but the Clear button will apply populate_from_local
                        $('.credit-report-button').off('click');

                        populate_from_local();

                    }
                })

            });
        },
        error: function(resp){
            console.log('something went wrong retrieving data', resp);
        }
    });

});