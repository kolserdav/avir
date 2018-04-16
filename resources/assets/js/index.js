let ajaxS = require('ajaxsim');
let names = require('pseudo-name');
let cook = require('dist-cookie');

function se(url = '', data = '', callback = '', method = 'POST'){

    function H() {}
    let h = new H();

    callback = function(response){
        console.log(response);
    };
    url = 'http://frame.work/aj';
    data = "cookie="+cook();
   ajaxS(url, data, callback, method);


}


window.se = se;


