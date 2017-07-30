// js 插件demo
;(function () {
    var constructor = function () {

    };

    constructor.prototype = {
        getStorage: function (name) {
            var config = JSON.parse(window.localStorage.getItem('WIS_G.' + name));
            return config === null ? {} : config;
        },
        setStorage: function (name, key, value) {
            var config = this.getStorage(name);
            config[key] = value;
            window.localStorage.setItem('WIS_G.' + name, JSON.stringify(config));
        },
        inStorage: function (name, value, obj) {
            var config = this.getStorage(name);
            var arr = config[obj] === undefined ? [] : config[obj];
            return this.inArray(value, arr);
        },
        pushStorage: function (name, key, value) {
            var config = this.getStorage(name);
            if (config[key] === undefined){
                config[key] = []
            }
            config[key].push(value);
            window.localStorage.setItem('WIS_G.' + name, JSON.stringify(config));
        },
        inArray: function (needle, array, bool) {
            if(typeof needle === 'string' || typeof needle=== 'number'){
                var len= array.length;
                for(var i=0; i<len; i++){
                    if(needle === array[i]){
                        if(bool){
                            return i;
                        }
                        return true;
                    }
                }
                return false;
            }
        }
    };

    window.WIS_storage = function(){
        return new constructor();
    };
})();
