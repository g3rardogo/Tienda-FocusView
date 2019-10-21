function table(id){
    var table =  $(id).DataTable({
        "oLanguage":{
            "sProcessing":     "Processing...",
            "sLengthMenu":     "Show _MENU_ records",
            "sZeroRecords":    "No results found",
            "sEmptyTable":     "No data available in this table",
            "sInfo":           "Showing records from _START_ to _END_ of a total of _TOTAL_ records",
            "sInfoEmpty":      "Showing records from 0 to 0 of a total of 0 records",
            "sInfoFiltered":   "(filtering a total of _MAX_ records)",
            "sInfoPostFix":    "",
            "sSearch":         "Search:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Loading...",
            "oPaginate": {
                "sFirst":    "First",
                "sLast":     "Last",
                "sNext":     "Next",
                "sPrevious": "Previous"
            },
            "oAria": {
                "sSortAscending":  ": Activate to sort the column in ascending order",
                "sSortDescending": ": Activate to sort the column in descending order"
            }
        },
        retrieve: true
       
    });
    $('select').formSelect();
}

function destroy(id){
    var table =  $(id).DataTable().destroy();
}