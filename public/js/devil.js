$('body').on('input', '.input-upper', function(){
    this.value = this.value.toUpperCase();
    this.value = this.value.replace(/[^a-z\s]/gi, '');
});
