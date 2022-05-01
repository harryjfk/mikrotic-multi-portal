
DateTimeFunction = {

    DateStringToObject: function (format, value) {
        var result = new Object();
        var f = format.split('/');
        var v = value.split('/');
        for (var i = 0; i < f.length; i++)
            if (f[i] == "DD")
                result.day = v[i];
            else if (f[i] == "MM")
                result.month = v[i];
            else
                result.year = v[i];
        return result;
    },

    DateStringToDate: function (format, value) {
        var date = this.DateStringToDate(format, value);

        var result = new Date(date.year + '/' + date.month + '/' + date.day);

        return result;
    }
    ,
    selectSetValue: function (select, value) {
        var t = $('#' + select + ' option[value="' + value + '"]');
        if (t.length == 0)
            $('#' + select).append('<option value="' + value + '">' + value + '</option>');
        $('#' + select).val(value);

    }
}