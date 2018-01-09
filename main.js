$( document ).ready(function() {setInterval(tick,1000)})

function tick(){
    var now  = new Date();
    var then = new Date("January 1, 2029 00:00:00");
    var away = then - now;
    away = Math.floor(away / 1000);
    document.getElementById("secs").innerHTML = away;
}


