$('#contact-date').datepicker({
    minDate: function() {
        let date = new Date();
        date.setDate(date.getDate()+2);
        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    },
 })