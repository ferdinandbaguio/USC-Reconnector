$('#create').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var type = button.data('type')
    var modal = $(this)

    modal.find('.modal-body #type').val(type);
})

$('#edit-user').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var id      = button.data('id')
    var status  = button.data('status')
    var fn      = button.data('fn')
    var mn      = button.data('mn')
    var ln      = button.data('ln')
    var type    = button.data('type')
    var idnum   = button.data('idnum')
    var sex     = button.data('sex')
    var email   = button.data('email')
    var pic     = button.data('pic')
    var desc    = button.data('desc')
    var year    = button.data('year')
    var updt    = button.data('updt')
    var pos     = button.data('pos')
    var dept    = button.data('dept')
    var modal   = $(this)

    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #fn').val(fn);
    modal.find('.modal-body #mn').val(mn);
    modal.find('.modal-body #ln').val(ln);
    modal.find('.modal-body #type').val(type);
    modal.find('.modal-body #idnum').val(idnum);
    modal.find('.modal-body #sex').val(sex);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #pic').val(pic);
    modal.find('.modal-body #desc').val(desc);
    modal.find('.modal-body #year').val(year);
    modal.find('.modal-body #updt').val(updt);
    modal.find('.modal-body #pos').val(pos);
    modal.find('.modal-body #dept').val(dept);
})

$('#edit-request').on('show.bs.modal', function(event) {
    var button  = $(event.relatedTarget)
    var id      = button.data('id')
    var status  = button.data('status')
    var fn      = button.data('fn')
    var mn      = button.data('mn')
    var ln      = button.data('ln')
    var type    = button.data('type')
    var idnum   = button.data('idnum')
    var sex     = button.data('sex')
    var email   = button.data('email')
    var modal   = $(this)

    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #fn').val(fn);
    modal.find('.modal-body #mn').val(mn);
    modal.find('.modal-body #ln').val(ln);
    modal.find('.modal-body #type').val(type);
    modal.find('.modal-body #idnum').val(idnum);
    modal.find('.modal-body #sex').val(sex);
    modal.find('.modal-body #email').val(email);
})

$('#delete').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #id').val(id);
})

$(function() {
    $('#example-table').DataTable({
        pageLength: 10, 
    });
})