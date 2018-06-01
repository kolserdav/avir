let ajaxS = require('ajaxsim');
let names = require('pseudo-name');
let cook = require('dist-cookie');

/*setInterval(()=>{let i = (Math.random()*100).toFixed(0);
    if (i > 50){
        console.log(i);
    }
    else {
        console.error('< 50');
    }
}, 1000);*/



//let re = window.applicationCache.status;
//window.onload  =
//console.log(Math.random()*100);

let route = require('route-fhash');
route('resources/assets/js/route');

/*function se(url = '', data = '', callback = '', method = 'POST'){

    function H() {}
    let h = new H();

    callback = function(response){
        console.log(response);
    };
    url = 'http://frame.work/aj';
    data = "cookie="+cook();
   ajaxS(url, data, callback, method);


}


window.se = se;*/


