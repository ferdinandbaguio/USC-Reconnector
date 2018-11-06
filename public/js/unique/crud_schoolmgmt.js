//School >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$('#show-school').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var scode = button.data('scode')
    var sname = button.data('sname')
    var sdesc = button.data('sdesc')
    var modal = $(this)

    modal.find('.modal-body #scode').val(scode);
    modal.find('.modal-body #sname').val(sname);
    modal.find('.modal-body #sdesc').val(sdesc);
})

$('#edit-school').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var sid = button.data('sid')
    var scode = button.data('scode')
    var sname = button.data('sname')
    var sdesc = button.data('sdesc')
    var modal = $(this)

    modal.find('.modal-body #sid').val(sid);
    modal.find('.modal-body #scode').val(scode);
    modal.find('.modal-body #sname').val(sname);
    modal.find('.modal-body #sdesc').val(sdesc);
})

$('#delete-school').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var sid = button.data('sid')
    var modal = $(this)

    modal.find('.modal-body #sid').val(sid);
})

//Department >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$('#show-department').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var dcode = button.data('dcode')
    var dname = button.data('dname')
    var ddesc = button.data('ddesc')
    var dscode = button.data('dscode')
    var dsname = button.data('dsname')
    var modal = $(this)

    modal.find('.modal-body #dcode').val(dcode);
    modal.find('.modal-body #dname').val(dname);
    modal.find('.modal-body #ddesc').val(ddesc);
    modal.find('.modal-body #dscode').val(dscode);
    modal.find('.modal-body #dsname').val(dsname);
})

$('#edit-department').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var did = button.data('did')
    var dcode = button.data('dcode')
    var dname = button.data('dname')
    var ddesc = button.data('ddesc')
    var dsid = button.data('dsid')
    var modal = $(this)

    modal.find('.modal-body #did').val(did);
    modal.find('.modal-body #dcode').val(dcode);
    modal.find('.modal-body #dname').val(dname);
    modal.find('.modal-body #ddesc').val(ddesc);
    modal.find('.modal-body #dsid').val(dsid);
})

$('#delete-department').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var did = button.data('did')
    var modal = $(this)

    modal.find('.modal-body #did').val(did);
})

//Course >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$('#show-course').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var ccode = button.data('ccode')
    var cname = button.data('cname')
    var cdesc = button.data('cdesc')
    var cdcode = button.data('cdcode')
    var cdname = button.data('cdname')
    var modal = $(this)

    modal.find('.modal-body #ccode').val(ccode);
    modal.find('.modal-body #cname').val(cname);
    modal.find('.modal-body #cdesc').val(cdesc);
    modal.find('.modal-body #cdcode').val(cdcode);
    modal.find('.modal-body #cdname').val(cdname);
})

$('#edit-course').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var cid = button.data('cid')
    var ccode = button.data('ccode')
    var cname = button.data('cname')
    var cdesc = button.data('cdesc')
    var cdid = button.data('cdid')
    var modal = $(this)

    modal.find('.modal-body #cid').val(cid);
    modal.find('.modal-body #ccode').val(ccode);
    modal.find('.modal-body #cname').val(cname);
    modal.find('.modal-body #cdesc').val(cdesc);
    modal.find('.modal-body #cdid').val(cdid);
})

$('#delete-course').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var cid = button.data('cid')
    var modal = $(this)

    modal.find('.modal-body #cid').val(cid);
})

$(function() {
    $('#example-table1').DataTable({
        pageLength: 10, 
        paging: false,
        searching: false,
    });
    $('#example-table2').DataTable({
        pageLength: 10, 
        paging: false,
        searching: false,
    });
    $('#example-table3').DataTable({
        pageLength: 10, 
        paging: false,
        searching: false,
    });
})