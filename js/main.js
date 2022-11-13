$(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });

//   // Basic example
// $(document).ready(function () {
//     $('#dtBasicExample').DataTable({
//      "ordering": false // false to disable sorting (or any other option)
//     });
//     $('.dataTables_length').addClass('bs-select');
//   });

//   $(document).ready(function () {
//     $('#selectedColumn').DataTable({
//       "aaSorting": [],
//       columnDefs: [{
//       orderable: false,
//       targets: 3
//       }]
//     });
//       $('.dataTables_length').addClass('bs-select');
//   });

// $(document).ready(function () {  //dtBasicExample
//     $('#dtOrderExample').DataTable({
//       "order": [[ 3, "desc" ]]
//     });
//       $('.dataTables_length').addClass('bs-select');
//   });


//pvz is w3schools search barui

// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });


function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
