// js 插件demo
;(function () {
    var constructor = function () {

    };

    constructor.prototype = {
        add: function (a, b) {
            return a + b;
        },
        reduce: function (a, b) {
            return a-b;
        }
    };

    window.math = function(){
        return new constructor();
    }
})();
