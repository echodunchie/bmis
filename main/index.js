
function displayDate() {
    var date= new Date();

    document.getElementById("time").innerHTML= date.toString();//DOM manipulation to change h2 element to current time
}

displayDate();//calling the function

setInterval(displayDate, 1000);//setting an interval to update the time every 1 second