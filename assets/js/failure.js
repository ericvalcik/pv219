window.onload = function() {
    let code = window.location.toString().split("code=")[1];
    if (code) {
        document.getElementById('code').innerHTML = 'ERROR CODE: ' + code.toUpperCase();
    }
}
