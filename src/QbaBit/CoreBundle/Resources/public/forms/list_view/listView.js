(function ($) {

    function ListViewValue(text, value) {
        this.text = text;
        this.value = value;
    }

    ListViewValue.prototype = Object();
    ListViewValue.prototype.constructor = ListViewValue;
    ListViewValue.prototype.text = "";
    ListViewValue.prototype.value = "";
    ListViewValue.prototype.getRender = function () {
        return '<option value=' + this.value + '>' + this.text + '</option>';
    }

    function ListViewGroup(name, id) {
        this.name = name;
        this.id = id;
    }

    ListViewGroup.prototype = Object();
    ListViewGroup.prototype.constructor = ListViewGroup;

    ListViewGroup.prototype.findValue = function (text) {
        if(this.values[this.name]==null)
        return -1;
        for (var i = 0; i < this.values[this.name].length; i++)
            if (this.values[this.name][i].text == text)
                return i;
        return -1;
    };
    ListViewGroup.prototype.name = "";
    ListViewGroup.prototype.id = "";
    ListViewGroup.prototype.values =  Array();
    ListViewGroup.prototype.add = function (text, value) {

        var i = this.findValue(text);
        var g = null;
        if (i == -1) {
            g = new ListViewValue(text, value);
            if(this.values[this.name]==null)
                this.values[this.name] = Array();
            this.values[this.name].push(g);
        }
    }
    ListViewGroup.prototype.toJson = function () {
        var t = Object();
        t.name = this.name;
        t.values = this.values[this.name]==null?Array():this.values[this.name];
        t.id = this.id;
        return t;
    };
    ListViewGroup.prototype.remove = function (text) {
        var i = this.findValue(text);
        if (i != -1) {
            var t = Array();
            for (var k = 0; k < this.values[this.name].length; k++)
                if (k != i)
                    t.push(this.values[this.name][k]);
            this.values[this.name] = t;
        }
    };
    ListViewGroup.prototype.getRender = function () {
        var t = '  <optgroup label="' + this.name + '">';
        if(this.values[this.name]!=null)
        for (var i = 0; i < this.values[this.name].length; i++)
            t += this.values[this.name][i].getRender();
        t += '</optgroup>';
        return t;
    };


    var listView_Controller =
    {
        control: null,
        groups: Array(),
        setList: function (list) {
            listView_Controller.control = list;
        },
        loadFromJson: function (json) {
            listView_Controller.groups =Array();
            var t = JSON.parse(json);
            for(var i=0;i< t.length;i++)
            {
                var gsrc =t[i];
                var g = new ListViewGroup(gsrc.name,gsrc.id);
                for(var k=0;k< gsrc.values.length;k++)
                {
                    var r = gsrc.values[k];
                    g.add(r.text, r.value);
                }
                listView_Controller.groups.push(g);

            }
            listView_Controller.render();
        },
        saveToJson: function () {
            var t = Array();
            for (var i = 0; i < listView_Controller.groups.length; i++)
                t.push(listView_Controller.groups[i].toJson())
            return ( JSON.stringify(t));
        },
        findGroup: function (name) {
            for (var i = 0; i < listView_Controller.groups.length; i++)
                if (listView_Controller.groups[i].name == name)
                    return i;
            return -1;
        },
        add: function (text, value, group, id) {
            var i = listView_Controller.findGroup(group);
            var g = null;
            if (i == -1) {
                g = new ListViewGroup(group, id);
                listView_Controller.groups.push(g);
            }
            else
                g = listView_Controller.groups[i];
            g.add(text, value);
            listView_Controller.render();
        },
        render: function () {
            var t = '';
            for (var i = 0; i < listView_Controller.groups.length; i++)
                t += listView_Controller.groups[i].getRender();
            $(listView_Controller.control).html(t);

        },
        remove: function (index) {
            var gname = $(index).parent().attr('label');
            var i = listView_Controller.findGroup(gname);
            var g = listView_Controller.groups[i];
            g.remove($(index).html());
            if (g.values[g.name].length == 0) {
                var t = Array();
                for (var k = 0; k < listView_Controller.groups.length; k++)
                    if (k != i)
                        t.push(listView_Controller.groups[k]);
                listView_Controller.groups = t;
            }
            listView_Controller.render();
        },
        removeSelected: function () {
            var l = $('#' + listView_Controller.control.attr("id") + ' option');
            for (var i = 0; i < l.length; i++)
                if (l[i].selected == true)
                    listView_Controller.remove(l[i]);

        }


    };
    $.fn.listView = function (list) {

        listView_Controller.setList(this);
        return listView_Controller;
    };


})
(jQuery);
