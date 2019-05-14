function saat(){
var now = new Date(<?php echo time() * 1000 ?>);
    function startInterval(){  
        setInterval('updateTime();', 1000);  
    }
    startInterval();//start it right away
    function updateTime(){
        var nowMS = now.getTime();
        nowMS += 1000;
        now.setTime(nowMS);
        var clock = document.getElementById('qwe');
        if(clock){
            clock.innerHTML = now.toTimeString("hh.mm.ss").replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");//adjust to suit
        }
    } 
}