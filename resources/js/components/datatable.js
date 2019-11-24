if ($('.datatable').length > 0) {

    var url = $('.datatable').data('url');
    
    var field = [];    
    $.each($('.datatable th'), function (index, obj) {
        field.push({
            name: $(obj).data('field'),
            data: $(obj).data('field'),
            searchable: $(obj).data('searchable') ? true : false,
            orderable: $(obj).data('orderable') ? true : false
        });
    })    

    $('.datatable').DataTable({
        serverSide: true,
        processing: true,
        ajax: url,
        columns: field
    });
}