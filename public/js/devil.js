$('select#devil').on('change', function() {
    $('input[name="devil"]').val(this.value);
});
