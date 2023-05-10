$('select#address').on('change', function() {
    $('input[name="address"]').val(this.value);
});
