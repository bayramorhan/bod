$(document).ready(function() {

  $.getJSON('/manager/get_package_list')
  .done(function(json) {
    $('#dataTable').DataTable({
      info: false,
      serverside: true,
      data:json,
      lengthChange: false,
      searching: false,
      paging: true,
      processing: true,
      columns: [
           { data: "pck_name" },
           {
             data: "ctg_name",
             "render": function ( data, type, row, meta ) {
                return '<i class="'+ row.ctg_icon +'"></i>' + ' ' + data +' / '+ row.prf_name;
              }
           },
           {
             data: "pck_price",
             "render": function ( data, type, row, meta ) {
                return '0.00 TL';
              }
           },
           { data: "name" },
           {
             data: "pck_id",
             "render": function ( data, type, row, meta ) {
                return '<a class="btn btn-info btn-sm" style="padding: .10rem .3rem;" href="/manager/edit_package/'+ row.pck_id +'" title="Düzenle"><i class="fa fa-edit"></i></a>';
              }
           }

       ],
      language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
        }
    });
  });
});
