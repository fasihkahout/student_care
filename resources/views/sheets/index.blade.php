@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
 Sheets
</h4>
<div class="card">
  
  <div class="table-responsive text-nowrap" style="overflow-x:auto;">
    <table id="vehiclesTable" class="table display dataTable table-striped vehiclesTable" >
      <thead></thead>
        <tbody></tbody>
    </table>
  </div>
</div>
</div>
@endsection
@section('js')
var data = [[0,"2016-05-01",0],[0,"2016-06-01",0],[0,"2016-07-01",0],[0,"2016-08-01",1],
[0,"2016-09-01",1]];

var dynamicColumns = [
{"title":"details-control"," sWidth":"40px"}, 
{"title":"Date"," sWidth":"100px"},  {"title":"testworks","sWidth":"30px","sClass":"dataTableAlignRight"}];

var vehiclesDataTable = null;

$(document).ready(function(){  
  
  createDataTable();
  
  window.setTimeout(function(){
    updateDataTableWithMoreColumns();
  }, 3000)
})

function createDataTable(){
  
  vehiclesDataTable = $("<table id='vehiclesTable' class='table display dataTable table-striped vehiclesTable'><thead></thead><tfoot></tfoot></table>"); // Insert here thead and tbody if really necessary.
  //vehiclesDataTable = "<table id='vehiclesTable' class='table display dataTable table-striped vehiclesTable'><thead></thead> </table>";
  $("#vehiclesTable_wrapper").replaceWith(vehiclesDataTable);
  
     $("#vehiclesTable").DataTable({
            destroy: true,
            "dom": '<"top">rt<"bottom"lp>i<"clear">',
            responsive: true,
            data: data,
            columns: dynamicColumns
   });
}

  function updateDataTableWithMoreColumns(){
    data = [[0,"2016-05-01",0,11],[0,"2016-06-01",0,11],[0,"2016-07-01",0,11],[0,"2016-08-01",2,11],[0,"2016-09-01",2,11]];

    dynamicColumns = [
      {"title":"details-control"," sWidth":"40px"}, 
      {"title":"Date"," sWidth":"100px"},
      {"title":"testworks","sWidth":"30px","sClass":"dataTableAlignRight"},
      {"title":"testworks2","sWidth":"30px","sClass":"dataTableAlignRight"}
    ];
    //alert("Rebinding table with an additional row")
    createDataTable();
  }
@endsection
 


