window.onload = function() {
    let query = window.location.toString().split("?")[1];
    let currency = query.split("=")[0];
    let price = query.split("=")[1];
    if (price && currency) {
        document.getElementById('val').innerHTML = price + ' ' + currency.toUpperCase();
    }
}
