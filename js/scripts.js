 document.addEventListener("DOMContentLoaded", readyHTML);
 function readyHTML() {
    var up_baton = document.createElement('img');
    var body = document.querySelector('body');
    body.appendChild(up_baton);
    up_baton.src = '/img/up-button.png';
    up_baton.style.opacity = "0";
    up_baton.className = "up_baton";

    window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    var h = window.innerHeight;
    if (scrolled > 0.2*h) {
        up_baton.style.opacity = "1";
        up_baton.style.cursor = "pointer";    
        up_baton.addEventListener('click',to_top) 
    }
    else {
        up_baton.style.opacity = "0";
        up_baton.style.cursor = "inherit"; 
        up_baton.removeEventListener('click',to_top)
    }
    }
    function to_top() {
    var start = Date.now();
    var timer = setInterval(function() { 
    var timePassed = Date.now() - start;
    var time = 5000;
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;  
      if (timePassed >= time || scrolled <= 0) {
        clearInterval(timer);
        return;
      }
      up (timePassed,time,scrolled);
    }, 10);
    function up(timePassed,time,scrolled) {
      if (scrolled > 0) {
      var x = scrolled - (scrolled*timePassed/(2*time));
      window.scrollTo(0,x); 
     }
     }
    }
    var table = document.querySelectorAll('table');
      for (var i = table.length - 1; i = 0; i--) {
        var cover = document.createElement('div');
        cover.classList.add('cover-table');
        table[i].parentNode.insertBefore(cover, table[i]);
        cover.appendChild(table[i]);
      }
}