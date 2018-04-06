import ajaxS from 'ajaxsim';

function se(url){
    if (navigator.onLine === true) {
        ajaxS(url);
    }
    else {
        console.log('aee');
    }
}
window.se = se;

