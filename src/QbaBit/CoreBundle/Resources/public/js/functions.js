var MKLib = {
    AjaxUpdate: function (url, divupdate, idform, method) {
        if (typeof method == "undefined")
            method = 'POST';

        MKLib.blockScreen();
        var data = '';
        if (idform)
            data = jQuery('#' + idform).serialize();

        try {
            jQuery.ajax({
                url: url,
                data: data,
                type: method,
                dataType: 'text',
                success: function (response) {
                    var divUpdate = jQuery('#' + divupdate);
                    if (divUpdate.html())
                        divUpdate.empty().append(response);
                    //divUpdate.children().fadeOut(50, function(){divUpdate.empty().append(response);});
                    else
                        divUpdate.append(response);
                },
                error: function (xhr, status) {
                    alert(xhr.responseText);
                    /*alert('Disculpe, ha ocurrido un problema vuelva a intentarlo.');*/
                },
                complete: function () {
                    jQuery('#blockscreen').hide();
                }
            });
        }
        catch (ex) {
            jQuery('#blockscreen').hide();
        }

        return false;
    },
    AjaxRequest: function (url, idform, myFn, dataType, method,base) {
        if (typeof method == "undefined")
            method = 'POST';
        MKLib.blockScreen(base);
        var data = '';
        if (idform)
            data = jQuery('#' + idform).serialize();

        try {
            jQuery.ajax({
                url: url,
                data: data,
                type: method,
                dataType: dataType,
                success: function (response) {
                    /*alert(response);*/
                    myFn(response);
                },
                error: function (xhr, status) {
                    alert('Disculpe, ha ocurrido un problema vuelva a intentarlo.' + xhr.responseText);
                    jQuery('#blockscreen').hide();
                },
                complete: function () {
                    return;
                }
            });
        }
        catch (ex) {
            jQuery('#blockscreen').hide();
            //showMsg('sh-error', ex.message);
        }

        return false;
    },
    AjaxSilent: function (url, idform, myFn, dataType, method) {
        if (typeof method == "undefined")
            method = 'POST';
        var data = '';
        if (idform)
            data = jQuery('#' + idform).serialize();

        try {
            jQuery.ajax({
                url: url,
                data: data,
                type: method,
                dataType: dataType,
                success: function (response) {
                    myFn(response);
                },
                error: function (xhr, status) {
                },
                complete: function () {
                    return;
                }
            });
        }
        catch (ex) {
            //showMsg('sh-error', ex.message);
        }

        return false;
    },
    AjaxJson: function (Json) {
        try {
            switch (parseInt(Json.status)) {
                case 1: {
                    if (Json.fn)
                        eval(Json.fn);
                    break;
                }
            }
        }
        catch (ex) {
            MKLib.showMsg('alert-danger', ex.message + ' ' + Json.fn);
        }
        jQuery('#blockscreen').hide();
    },
    dimPadre: function (ele) {
        var parent = jQuery(document);//ele.parent(); 
        ele.css({
            'width': '100%'/*parent.width()+'%'*/,
            'height': parent.height(),
            'position': 'fixed',
            'z-index': 99999999,
            'top': 0
        });
    },
    initToast: false,
    showMsg: function (cssclass, message, selectorShowIn) {

        var levelMessage = '';
        switch (cssclass) {
            case 'alert-danger': {
                levelMessage = 'error';
                break;
            }

            case 'alert-success': {
                levelMessage = 'success';
            }
        }

        if (!MKLib.initToast) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            MKLib.initToast = true;
        }
        jQuery('.toast-top-center').remove();
        toastr[levelMessage](message);
        /*if (typeof selectorShowIn == 'undefined')
         selectorShowIn = '.inelbox';

         var div = jQuery('.alert');

         if (cssclass == 'alert')
         cssclass = '';

         if (div.get(0))
         div.fadeOut(150).remove();

         div = jQuery('<div class="alert ' + cssclass + '"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + message + '</div>');


         div.stop();
         div.insertBefore(selectorShowIn + ' div:first').fadeIn(300).delay(10000).fadeOut(300);*/
    },
    resetForm: function (id, fn) {
        jQuery('#' + id).get(0).reset();
        if (fn)
            fn();
    },
    blockScreen: function (base) {
        var block = jQuery('#blockscreen');
        if (block.get(0)) {
            MKLib.dimPadre(block);
            block.show();
        }
        else {
            block = jQuery('<div></div>');
            block.attr('id', 'blockscreen').addClass('opaco_block');
            block.appendTo('body');
            MKLib.dimPadre(block);
            var dvIndicador = jQuery('<div></div>');

            var imgcargador = jQuery('<img>').attr({
                'src': base+'/bundles/qbabitcore/images/charging.gif',
                'align': 'absmiddle'
            });
            dvIndicador.append(imgcargador);

            dvIndicador.addClass('dvc w20p indicador').append(' Cargando...');

            block.append(dvIndicador);
            block.show();
        }
    },
    deleteItem: function (list, fn, prefijo) {
        if (typeof prefijo == "undefined")
            prefijo = '';

        var i = 0;
        for (; i < list.length; i++) {
            jQuery('#' + prefijo + list[i]).fadeOut(250, function () {
                jQuery(this).remove()
            });
        }
        if (fn)
            fn();
    },
    renderErrors: function (jsonerrors, elemHtmlMsg, callback) {
        jQuery('.error').remove();
        jQuery.each(jsonerrors, function (idx, elem) {
            var jQuerythis = jQuery('#' + idx);
            var eleMsg = null;
            jQuery.each(elem, function (index, item) {
                eleMsg = jQuery(elemHtmlMsg).addClass('error');
                eleMsg.html(item);
                eleMsg.insertAfter(jQuerythis);
            });

            eleMsg.insertAfter(jQuerythis);
        });

        if (callback)
            callback();
    },
    checkedCtrl: function (ctrl, selector, callback) {
        jQuery(selector).each(function (idx, ele) {
            myEle = jQuery(ele);
            if (ctrl.is(':checked'))
                myEle.attr('checked', 'checked');
            else
                myEle.get(0).removeAttribute('checked');

            if (typeof callback == 'function') {
                callback(ctrl.is(':checked'), myEle);
            }

        });
    },
    cantElem: function (selector) {
        return jQuery(selector).length;
    },
    unlockScreen: function () {
        jQuery('#blockscreen').hide();
    }

};

var MKAjax = {
    setAjaxUpdateForm: function (idform, url, divupdate) {
        jQuery('#' + idform).bind('submit', function () {
            var jQuerythis = jQuery(this);
            url = url ? url : jQuerythis.attr('action');
            MKLib.AjaxUpdate(url, divupdate, idform);
            return false;
        });
        return this;
    },
    setAjaxRequestForm: function (url, idform, myFn, dataType) {
        jQuery('#' + idform).bind('submit', function () {
            var jQuerythis = jQuery(this);
            url = url ? url : jQuerythis.attr('action');
            MKLib.AjaxRequest(url, idform, myFn, dataType);
            return false;
        });
        return this;
    },
    /**
     * Hace que un elemento haga una petición ajax en el evento onclick
     */
    setAjaxUpdateItem: function (selector, idform, url, divupdate) {
        jQuery(selector).bind('click', function () {
            var jQuerythis = jQuery(this);
            url = url ? url : jQuerythis.attr('href');
            MKLib.AjaxUpdate(url, divupdate, idform);
            return false;
        });
        return this;
    },
    loadHtmlSelect: function (url, selectorToSelect, idform, textLoading, callback) {
        var objSelect = jQuery(selectorToSelect);
        var firstOption = objSelect.find('option:first');
        firstOption.html(textLoading);
        firstOption.siblings().remove();

        MKLib.AjaxSilent(url, idform, function (j) {
            objSelect.parent().empty().append(jQuery(j));
            if (callback)
                callback();
        }, 'html');

    },
    paginate: function (selectorLink, idEleUpdate, idform) {
        jQuery(selectorLink).on('click', function (e) {
            e.preventDefault();
            var _this = jQuery(this);
            MKLib.AjaxUpdate(_this.attr('href'), idEleUpdate, idform);
        });
    }

};


var Util = {
        renderErrors: function (err) {

            if (typeof err == "undefined")
                return;

            if (typeof err.messages == "undefined")
                return;

            console.log(err.messages);
            if (typeof err.messages != "undefined") {

                var nameForm = err.nameForm;
                jQuery('.errorfield').remove();
                var list = {};
                jQuery.each(err.messages, function (idx, objMessage) {
                    if (typeof list[objMessage.field] == "undefined")
                        list[objMessage.field] = '<div class="errorfield">' + objMessage.msg + '</div>';
                    else
                        list[objMessage.field] += '<div class="errorfield">' + objMessage.msg + '</div>';
                });

                for (var idx in list)
                    jQuery(list[idx]).insertAfter(jQuery('#' + nameForm + '_' + idx));
            }

            return this;
        },
        removeMsgIfNotErrors: function (err) {
            if (typeof err == "undefined") {
                jQuery('.errorfield').remove();
                return;
            }

            if (typeof err.messages == "undefined")
                jQuery('.errorfield').remove();

            return this;
        },
        ValidaNumber: function (event) {
            var code = event.which || event.keyCode;
            var target = event.target || event.srcElement;
            var bool = true;
            if (code == 46) {
                var filter = /^\d+$/;
                if (filter.test(target.value))
                    bool = true;
                else
                    bool = false;
            }
            else {
                if (code == 37 || code == 39 || code == 8)
                    bool = true;
                else if (code < 47 || code > 57)
                    bool = false;
            }
            return bool;
        },

        loadSelectByJson: function (json, idselect, allowFirstOption) {
            var obj = jQuery(idselect);
            if (allowFirstOption)
                obj.find('option:first').siblings().remove();
            else
                obj.find('option').remove();

            for (var index in json) {
                var item = json[index];
                var option = jQuery('<option value="' + item.id + '">' + item.name + '</option>');
                obj.append(option);
            }
        },

        showModal: function (options) {

            var _modal = jQuery('#' + options.id);
            if (typeof _modal.get(0) == "undefined") {

                //console.log(options);

                var html = '<div class="modal fade" tabindex="-1" role="dialog" id="' + options.id + '">';
                html += '<div class="modal-dialog" role="document">';
                html += '<div class="modal-content">';
                html += '<div class="modal-header">';
                html += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                html += '<h4 class="modal-title">' + options.title + '</h4>';
                html += '</div>';
                html += '<div class="modal-body" id="' + options.placeholder + '">' + options.content + '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';

                var _modal = jQuery(html);

                if (options.buttons.length) {
                    var buttons = '<div class="modal-footer"></div>';
                    var _contentButtons = jQuery(buttons);

                    for (var i = 0; i < options.buttons.length; i++) {
                        var btn = options.buttons[i];
                        var button = jQuery('<button type="button" class="' + btn.class + '" ' + btn.data + '>' + btn.text + '</button>');
                        if (typeof options.buttons[i].vehavior != "undefined") {
                            var callBack = options.buttons[i].vehavior.callback;
                            button.on(options.buttons[i].vehavior.event, function () {
                                callBack();
                            });
                        }
                        _contentButtons.append(button);
                    }
                    //_modal.find('.modal-body').insertAfter(_contentButtons);
                    _modal.find('.modal-body').after(_contentButtons);
                }
                jQuery('body').append(_modal);
            }

            return _modal;
        },

        listCallBacks: [],

        registerCallBack: function (event, callback) {
            if (typeof this.listCallBacks[event] == "undefined") {
                this.listCallBacks[event] = [];
            }
            this.listCallBacks[event].push(callback);
        },

        renderCallBacks: function (event, obj) {
            if (typeof this.listCallBacks[event] == "undefined") {
                console.log('The event callback ' + event + ' is not defined.');
                return;
            }

            for (var i = 0; i < this.listCallBacks[event].length; i++) {
                this.listCallBacks[event][i](obj);
            }

        },

        removeCallBack: function (event, obj) {

            if (typeof this.listCallBacks[event] == "undefined") {
                console.log('The event callback ' + event + ' is not defined.');
                return;
            }

            var list = [];
            for (var i = 0; i < this.listCallBacks[event].length; i++) {
                if (this.listCallBacks[event][i] == obj) {
                    list.push(this.listCallBacks[event][i]);
                }
            }
            if (list.length) {
                this.listCallBacks[event] = list;
            }
        },

        removeCallbackEvent: function (event) {
            if (typeof this.listCallBacks[event] == "undefined") {
                console.log('The event callback ' + event + ' is not defined.');
                return;
            }

            this.listCallBacks[event] = [];
        }

    }
;
