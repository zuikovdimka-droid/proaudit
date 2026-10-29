 document.addEventListener("DOMContentLoaded", readyHTML);
 function readyHTML() {
    adapt('940','#menu-glavnoe-menyu','cover','/img/white-hamburger.png');
    // activeMenu('sidebar-menu');
 }
 
// function activeMenu(menu) {
//     var a = document.querySelectorAll('.' + menu + ' a');
//     if (a) {
//       for (var i = 0; i < a.length; i++) {
//           var b = a[i];
//           var href = b.getAttribute('href');
//               if (!window.location.pathname.indexOf(href)) {
//                   b.className = 'active';
//                   var item = b;
//                   do {
//                     item = item.parentNode;
//                     var tag = item.tagName;
//                     if (tag == 'LI' && item.classList.contains('sidebar-menu-item')) {
//                         item.classList.add('active-partent');
//                     }
//                   } while (item.classList.contains(menu) != true);
//               }
//           }
//     }
// }

function adapt(adaptWid,menu,covertable,menuicon) {
    _resizewindow();
    window.addEventListener('resize', _resizewindow);
    // window.addEventListener('scroll', scrollfunc);
    if (covertable && covertable != 'nocover') {
        _coverTable();
    }
        menuicon = menuicon || '/images/white-hamburger.png';
function  _coverTable() {
    var table = document.querySelectorAll('table');
    for (var i = table.length - 1; i >= 0; i--) {
      var cover = document.createElement('div');
      cover.classList.add('cover-table');
      table[i].parentNode.insertBefore(cover, table[i]);
      cover.appendChild(table[i]);
    }
}
    var body = document.querySelector('body');
    var css = '.cover-table {max-width: 100%;overflow: auto;}.menu-close-button{display:none}body.OverflowHiden{overflow:hidden;}@media screen and (max-width:'+ adaptWid +'px){'+ menu +'{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-moz-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0);left:-350px;top:0;overflow:hidden;max-width:350px;max-height:100%;position:fixed;z-index:3001;-webkit-transition:0.5s all;-o-transition:0.5s all;-moz-transition:0.5s all;transition:0.5s all;-webkit-transition-delay:0.1s;-o-transition-delay:0.1s;-moz-transition-delay:0.1s;transition-delay:0.1s;background:white;flex-wrap:wrap}.menu-close-button{display:none;background-color:#545454;position:relative;height:60px;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border-bottom:1px solid #545454}.menu-close-button .line-white-menu{-webkit-transition-delay:0.2s;-o-transition-delay:0.2s;-moz-transition-delay:0.3s;transition-delay:0.3s;-webkit-transition:0.3s;-o-transition:0.3s;-webkit-transition:0.7s;-o-transition:0.7s;-moz-transition:0.7s;transition:0.7s;display:block;width:50px;height:4px;background-color:white;position:absolute;top:0;left:10px}.menu-close-button .line-white-menu:first-child{top:-webkit-calc(25% - 2px);top:-moz-calc(25% - 2px);top:calc(25% - 2px)}.menu-close-button .line-white-menu:nth-child(2){top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}.menu-close-button .line-white-menu:last-child{top:-webkit-calc(75% - 2px);top:-moz-calc(75% - 2px);top:calc(75% - 2px)}'+ menu +'.showmenu .line-white-menu:first-child{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}'+ menu +'.showmenu .line-white-menu:last-child{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}'+ menu +'.showmenu .line-white-menu{-webkit-transform:scale(0);-ms-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);transform:scale(0)}'+ menu +'>li>a>span.link-text{width:auto}'+ menu +'.showmenu{-webkit-transform:translate(350px,0);-ms-transform:translate(350px,0);-moz-transform:translate(350px,0);-o-transform:translate(350px,0);transform:translate(350px,0);overflow:auto}.icon-menu-bg{opacity:0;-webkit-transition:0.5s opacity;-o-transition:0.5s opacity;-moz-transition:0.5s opacity;transition:0.5s opacity}.icon-menu-bg.showbg{position:fixed;opacity:1;left:0;top:0;width:100%;height:100%;z-index:1000;background:rgba(0,0,0,.85)}.adapt-menu-icon,.show-menu-icon{display:block;width:49px;height:49px;margin:0 auto;padding:0;/*background:url('+ menuicon +') no-repeat center;-webkit-background-size:30px 30px;-o-background-size:30px;background-size:30px*/}'+ menu +' li{width:100%;}'+ menu +' li a{padding:15px 10px}.adapt-menu-icon{position:fixed;left:0;top:35px;background:#333;border:1px solid #fff;z-index:3002;transition: 0.5s;transform:translate(0px,0px);transition-delay: 0.1s;box-sizing:border-box;padding:5px;cursor:pointer}.adapt-menu-icon .line-white-menu{-webkit-transition-delay:.2s;-o-transition-delay:.2s;-moz-transition-delay:.3s;transition-delay:.3s;-webkit-transition:.3s;-o-transition:.3s;-webkit-transition:.7s;-o-transition:.7s;-moz-transition:.7s;transition:.7s;display:block;width:calc(100% - 10px);height:4px;background-color:#fff;position:absolute;top:0;left:5px}.adapt-menu-icon .line-white-menu:first-child{top:-webkit-calc(25% - 2px);top:-moz-calc(25% - 2px);top:calc(25% - 2px)}.adapt-menu-icon .line-white-menu:nth-child(2){top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}.adapt-menu-icon .line-white-menu:last-child{top:-webkit-calc(75% - 2px);top:-moz-calc(75% - 2px);top:calc(75% - 2px)}.adapt-menu-icon.activeGamburger{transform:translate(350px,-35px)}.adapt-menu-icon.activeGamburger .line-white-menu{-webkit-transform:scale(0);-ms-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);transform:scale(0)}.adapt-menu-icon.activeGamburger .line-white-menu:first-child{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}.adapt-menu-icon.activeGamburger .line-white-menu:last-child{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);top:-webkit-calc(50% - 2px);top:-moz-calc(50% - 2px);top:calc(50% - 2px)}}@media screen and (max-width:360px){'+ menu +'.showmenu{transform:translate(320px,0);left:-320px;max-width:320px}.adapt-menu-icon.activeGamburger{transform:translate(271px,-35px);border:1px solid #333}}';
    head = document.head || document.getElementsByTagName('head')[0];
    style = document.createElement('style');
    style.type = 'text/css';
    if (style.styleSheet){
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }
    head.appendChild(style);
    var adapt_menu = document.querySelector(menu);
    var gamburger = document.querySelector('.adapt-menu-icon');
    if (!gamburger) {
        var gamburger = document.createElement('div');
            gamburger.classList.add('adapt-menu-icon');
            gamburger.innerHTML = '<span class="line-white-menu"></span>\n<span class="line-white-menu"></span>\n<span class="line-white-menu"></span>\n';
    }
    var gamburger2 = document.querySelector('.show-menu-icon');
    if (!gamburger2) {
        //var gamburger2 = document.createElement('div');
            //gamburger2.classList.add('show-menu-icon');
    }
    var bgicon = document.querySelector('.icon-menu-bg');
    if (!bgicon) {
        var bgicon = document.createElement('div');
            bgicon.classList.add('icon-menu-bg');
    }
    var closemenu = document.querySelector('.menu-close-button');
    if (!closemenu) {
        var closemenu = document.createElement('div');
        closemenu.innerHTML = '<span class="line-white-menu"></span>\n<span class="line-white-menu"></span>\n<span class="line-white-menu"></span>\n';
        closemenu.classList.add('menu-close-button');
    }
    if (gamburger && adapt_menu ) {
        adapt_menu.parentNode.appendChild(gamburger);
        gamburger.addEventListener('click', showmenu);}
    if (gamburger2 && adapt_menu) {
        adapt_menu.parentNode.appendChild(gamburger2);
        gamburger2.addEventListener('click', showmenu);}
    if (bgicon && adapt_menu) {
        adapt_menu.parentNode.appendChild(bgicon);
        bgicon.addEventListener('click',hidemenu);
    }
    if (closemenu && adapt_menu){
        adapt_menu.insertBefore(closemenu, adapt_menu.firstChild);
        closemenu.addEventListener('click',hidemenu);
    } 
  function _resizewindow() {
    var wid = window.innerWidth;
    if (wid < adaptWid) {
      if (gamburger) {gamburger.addEventListener('click', showmenu);}
      if (gamburger2) {gamburger2.addEventListener('click', showmenu);}
      if (bgicon) {bgicon.addEventListener('click',showmenu);}
      if (closemenu){closemenu.addEventListener('click',hidemenu);} 
    } else {
      if (gamburger) {gamburger.removeEventListener('click', showmenu);gamburger.classList.remove('activeGamburger');}
      if (gamburger2) {gamburger2.removeEventListener('click', showmenu);} 
      if (adapt_menu) {adapt_menu.classList.remove('showmenu');}
      if (closemenu){closemenu.removeEventListener('click',hidemenu);} 
      if (bgicon) {
          bgicon.classList.remove('showbg');
          bgicon.removeEventListener('click',showmenu);
      }
      if (body) {
          body.classList.remove('OverflowHiden');
      }
    } 
  }
  function showmenu() {
      if (gamburger) {
          gamburger.removeEventListener('click',showmenu);
          gamburger.classList.add('activeGamburger');
          gamburger.addEventListener('click',hidemenu);   
      }
      if (gamburger2) {
          gamburger2.removeEventListener('click',showmenu);
          gamburger2.addEventListener('click',hidemenu);    
      }
      var scrolled = window.pageYOffset || document.documentElement.scrollTop;
      var link = adapt_menu.querySelectorAll('a');
      if (link) {
        for (var i = link.length - 1; i >= 0; i--) {
            link[i].addEventListener('click', hidemenu);
        }
      }
      if (adapt_menu) {
          adapt_menu.classList.add('showmenu');
      }
      if (closemenu) {
          closemenu.addEventListener('click',hidemenu);
      }
      if (bgicon) {
          bgicon.classList.add('showbg');
          bgicon.addEventListener('click',showmenu);
      }
      if (body) {
          body.classList.add('OverflowHiden');
      }
  }
  function hidemenu() {
      if (gamburger) {
        gamburger.addEventListener('click',showmenu);
        gamburger.classList.remove('activeGamburger');
        gamburger.removeEventListener('click',hidemenu); 
      }
      if (gamburger2) {
        gamburger2.addEventListener('click',showmenu);
        gamburger2.removeEventListener('click',hidemenu); 
      }
      if (bgicon) {
          bgicon.classList.remove('showbg');
          bgicon.removeEventListener('click',showmenu);
      }
      if (closemenu) {
          closemenu.removeEventListener('click',hidemenu);
      }
      if (adapt_menu) {
          adapt_menu.classList.remove('showmenu');
      } 
      if (body) {
          body.classList.remove('OverflowHiden');
      }
  }
}