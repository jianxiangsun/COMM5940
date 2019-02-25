$(document).ready(function(){
  $("button#get_result").click(function() {
  var  items = [];
  var i = 0;
  var airtable_read_endpoint = "https://api.airtable.com/v0/appKe6Re1Ha6zrrso/Accounting%20Jobs?api_key=keyLZQGPBz655pCmy";
  var dataSet = [];
  $.getJSON(airtable_read_endpoint, function(result) {
         $.each(result.records, function(key,value) {
            items = [];
            items.push(value.fields.page_number);
            items.push(value.fields.job_title);
            items.push(value.fields.companies);
            items.push(value.fields.requirements);
            items.push(value.fields.location);
            items.push('<a href="' + value.fields.url + '" target="_blank">' + 'Link' + '</a>');

            dataSet.push( items);
          }); // end .each
       $("#table1").DataTable( {
           data:  dataSet,
          "bAutoWidth": false,
           retrieve: true,


           columns: [
             { title: "Page #",
                 defaultContent:"" },
             { title: "Job Titles",
               defaultContent:"" },
             { title: "Companies",
             defaultContent:""},
             { title: "Requirements",
               defaultContent:"" },
             { title: "Location",
               defaultContent:"" },
             { title: "Links",
               defaultContent:""},
            ],

             } );
        }); // end .getJSON

  });// end button
}); // document ready
