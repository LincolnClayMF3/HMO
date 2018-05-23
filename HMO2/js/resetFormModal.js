$('.modal').on('hidden.bs.modal', function() {
    $('.form-group').removeClass('has-feedback');
    $('.form-group').removeClass('has-error');
    $('.form-group').removeClass('has-success');
    $('.form-group').find('small.help-block').hide();
    $('.form-group').find('i.form-control-feedback').hide();
    $(this).find('form')[0].reset();
});
