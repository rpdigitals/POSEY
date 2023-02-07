function filterBookings(str) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("filterResponse").innerHTML = this.responseText;
    };

    xhttp.open("GET", "filterBookings.php?q=" + str);
    xhttp.send();
}
