$('#show-class').on('show.bs.modal', function(event) {
    var button      = $(event.relatedTarget)
    var id          = button.data('id')
    var status      = button.data('status')
    var tname       = button.data('tname')
    var tidnum      = button.data('tidnum')
    var tsex        = button.data('tsex')
    var temail      = button.data('temail')
    var tpos        = button.data('tpos')
    var tdesc       = button.data('tdesc')

    var scode       = button.data('scode')
    var sname       = button.data('sname')
    var sdesc       = button.data('sdesc')

    var year1       = button.data('year1')
    var sem1        = button.data('sem1')
    var cday1       = button.data('cday1')
    var cstart1     = button.data('cstart1')
    var cend1       = button.data('cend1')

    var year2       = button.data('year2')
    var sem2        = button.data('sem2')
    var cday2       = button.data('cday2')
    var cstart2     = button.data('cstart2')
    var cend2       = button.data('cend2')

    var year3       = button.data('year3')
    var sem3        = button.data('sem3')
    var cday3       = button.data('cday3')
    var cstart3     = button.data('cstart3')
    var cend3       = button.data('cend3')

    var modal   = $(this)

    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #tname').val(tname);
    modal.find('.modal-body #tidnum').val(tidnum);
    modal.find('.modal-body #tsex').val(tsex);
    modal.find('.modal-body #temail').val(temail);
    modal.find('.modal-body #tpos').val(tpos);
    modal.find('.modal-body #tdesc').val(tdesc);

    modal.find('.modal-body #scode').val(scode);
    modal.find('.modal-body #sname').val(sname);
    modal.find('.modal-body #sdesc').val(sdesc);

    modal.find('.modal-body #year1').val(year1);
    modal.find('.modal-body #sem1').val(sem1);
    modal.find('.modal-body #cday1').val(cday1);
    modal.find('.modal-body #cstart1').val(cstart1);
    modal.find('.modal-body #cend1').val(cend1);

    modal.find('.modal-body #year2').val(year2);
    modal.find('.modal-body #sem2').val(sem2);
    modal.find('.modal-body #cday2').val(cday2);
    modal.find('.modal-body #cstart2').val(cstart2);
    modal.find('.modal-body #cend2').val(cend2);

    modal.find('.modal-body #year3').val(year3);
    modal.find('.modal-body #sem3').val(sem3);
    modal.find('.modal-body #cday3').val(cday3);
    modal.find('.modal-body #cstart3').val(cstart3);
    modal.find('.modal-body #cend3').val(cend3);
})
$('#edit-class').on('show.bs.modal', function(event) {
    var button      = $(event.relatedTarget)
    var id          = button.data('id')
    var status      = button.data('status')
    var tid         = button.data('tid')
    var sid         = button.data('sid')

    var gsid1       = button.data('gsid1')
    var gsday1       = button.data('gsday1')
    var gsstart1       = button.data('gsstart1')
    var gsend1       = button.data('gsend1')
    var gssem1       = button.data('gssem1')

    var gsid2       = button.data('gsid2')
    var gsday2       = button.data('gsday2')
    var gsstart2       = button.data('gsstart2')
    var gsend2       = button.data('gsend2')
    var gssem2       = button.data('gssem2')

    var gsid3       = button.data('gsid3')
    var gsday3       = button.data('gsday3')
    var gsstart3       = button.data('gsstart3')
    var gsend3       = button.data('gsend3')
    var gssem3       = button.data('gssem3')

    var modal   = $(this)

    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #tid').val(tid);
    modal.find('.modal-body #sid').val(sid);

    modal.find('.modal-body #gsid1').val(gsid1);
    modal.find('.modal-body #gsday1').val(gsday1);
    modal.find('.modal-body #gsstart1').val(gsstart1);
    modal.find('.modal-body #gsend1').val(gsend1);
    modal.find('.modal-body #gssem1').val(gssem1);

    modal.find('.modal-body #gsid2').val(gsid2);
    modal.find('.modal-body #gsday2').val(gsday2);
    modal.find('.modal-body #gsstart2').val(gsstart2);
    modal.find('.modal-body #gsend2').val(gsend2);
    modal.find('.modal-body #gssem2').val(gssem2);

    modal.find('.modal-body #gsid3').val(gsid3);
    modal.find('.modal-body #gsday3').val(gsday3);
    modal.find('.modal-body #gsstart3').val(gsstart3);
    modal.find('.modal-body #gsend3').val(gsend3);
    modal.find('.modal-body #gssem3').val(gssem3);
})
$('#delete-class').on('show.bs.modal', function(event){
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