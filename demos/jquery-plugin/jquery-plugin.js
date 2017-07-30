// jquery 插件demo
;(function ($, window, document, undefined) {
    var constructor = function (ele, options) {
        this.$ele = ele;
        this.defaults = {
            'color': '#eee',
            'border': '1px solid #eee'
        }
        this.options = $.extend({}, this.defaults, options);
    }

    constructor.prototype = {
        init: function () {
            return this.$ele.css({
                'color': this.options.color,
                'border': this.options.border
            });
        }
    }

    $.fn.changeCss = function (options) {
        var changeCss = new constructor(this, options);
        return changeCss.init();
    }
})(jQuery, window, document)
