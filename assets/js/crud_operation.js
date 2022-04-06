<script type="text/javascript" src="<?php echo base_url() . 'assets/js/crud_operation.js' ?>"></script>


// $(document).ready(function () {
//     listUsers();
//     $('#listUserTable').dataTable({
//        "bPaginate": false,
//        "bInfo": false,
//        "bFilter": false,
//        "bLengthChange": false,
//        "pageLength": 5
//     });
//  // list all user in datatable
//     function listUsers() 
//     {
//        $.ajax({
//           type: 'ajax',
//           url: 'user/tampilkanData',
//           async: false,
//           dataType: 'json',
//           success: function (data) 
//           {
//              var html = '';
//              var i;
//              var no = 1;
//           for (i = 0; i < data.length; i++) {
//               html += '<tr id="' + data[i].nis + '">' +
//                 '<td>' + data[i].nama + '</td>' +
//                 '<td>' + data[i].alamat + '</td>' +
//                 '<td>' + data[i].no_telp + '</td>' +
//                 '<td>' + data[i].tgl_lahir + '</td>' +
//                 '<td>' + data[i].agama + '</td>' +
//                 '<td>' + data[i].id_jurusan + '</td>' +
//                 '<td style="text-align:right;">' +
//                 '<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-nis="' + data[i].nis + '" data-nama="' + data[i].nama + '"data-alamat="' + data[i].alamat + '"data-no_telp="' + data[i].no_telp + '"data-tgl_lahir="' + data[i].tgl_lahir + '"data-agama="' + data[i].agama + '"data-id_jurusan="' + data[i].id_jurusan + '">Edit</a>' + ' ' +
//                 '<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-nis="' + data[i].nis + '">Delete</a>' +
//                 '</td>' +
//                 '</tr>';
          
//     }
//     $('#listUser').html(html);
//             }
//         }
// });
