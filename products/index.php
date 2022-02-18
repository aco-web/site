<html>
<!--
|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|
╭━━━┳━━━┳━━━╮
┃╭━╮┃╭━╮┃╭━╮┃
┃┃╱┃┃┃╱╰┫┃╱┃┃
┃╰━╯┃┃╱╭┫┃╱┃┃
┃╭━╮┃╰━╯┃╰━╯┃
╰╯╱╰┻━━━┻━━━╯
|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|🅐🅒🅞|
-->
<!-----⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕----->
   <head>
<!-----⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕----->

   <!--🔼Visual Head\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
      <title>ACO | Products & Brands</title>
      <link rel="apple-touch-icon" sizes="180x180" href="https://i.imgur.com/OQxPnyN.png">
      <link rel="icon" type="image/png" sizes="32x32" href="https://i.imgur.com/OQxPnyN.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://i.imgur.com/OQxPnyN.png">
   <!--🔼Visual Head\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
   <!--🎨Style CSS\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
      <link rel="manifest" href="site.webmanifest">
      <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
      <link rel="stylesheet" href="../css/main.css">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <!---c u s t o m--->
      <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/one.css">
      <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/two.css">
      <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/three.css">
      <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/extra.css">
      <style>
         * {
         border: 0;
         box-sizing: border-box;
         margin: 0;
         padding: 0;
         }
         productsbar, button, input {
         font: 1em Hind, sans-serif;
         line-height: 1.5em;
         }
         productsbar, input {
         color: #171717;
         }
         productsbar, .search-bar {
         display: flex;
         }
         productsbar {
         background: #f1f1f1;
         height: 100vh;
         }
         .search-bar input,
         .search-btn, 
         .search-btn:before, 
         .search-btn:after {
         transition: all 0.25s ease-out;
         }
         .search-bar input,
         .search-btn {
         width: 3em;
         height: 3em;
         }
         .search-bar input:invalid:not(:focus),
         .search-btn {
         cursor: pointer;
         }
         .search-bar,
         .search-bar input:focus,
         .search-bar input:valid  {
         width: 100%;
         }
         .search-bar input:focus,
         .search-bar input:not(:focus) + .search-btn:focus {
         outline: transparent;
         }
         .search-bar {
         margin: auto;
         padding: 1.5em;
         justify-content: center;
         max-width: 30em;
         }
         .search-bar input {
         background: transparent;
         border-radius: 1.5em;
         box-shadow: 0 0 0 0.4em #171717 inset;
         padding: 0.75em;
         transform: translate(0.5em,0.5em) scale(0.5);
         transform-origin: 100% 0;
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
         }
         .search-bar input::-webkit-search-decoration {
         -webkit-appearance: none;
         }
         .search-bar input:focus,
         .search-bar input:valid {
         background: #fff;
         border-radius: 0.375em 0 0 0.375em;
         box-shadow: 0 0 0 0.1em #d9d9d9 inset;
         transform: scale(1);
         }
         .search-btn {
         background: #171717;
         border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
         padding: 0.75em;
         position: relative;
         transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
         transform-origin: 0 50%;
         }
         .search-btn:before, 
         .search-btn:after {
         content: "";
         display: block;
         opacity: 0;
         position: absolute;
         }
         .search-btn:before {
         border-radius: 50%;
         box-shadow: 0 0 0 0.2em #f1f1f1 inset;
         top: 0.75em;
         left: 0.75em;
         width: 1.2em;
         height: 1.2em;
         }
         .search-btn:after {
         background: #f1f1f1;
         border-radius: 0 0.25em 0.25em 0;
         top: 51%;
         left: 51%;
         width: 0.75em;
         height: 0.25em;
         transform: translate(0.2em,0) rotate(45deg);
         transform-origin: 0 50%;
         }
         .search-btn span {
         display: inline-block;
         overflow: hidden;
         width: 1px;
         height: 1px;
         }
         /* Active state */
         .search-bar input:focus + .search-btn,
         .search-bar input:valid + .search-btn {
         background: #2762f3;
         border-radius: 0 0.375em 0.375em 0;
         transform: scale(1);
         }
         .search-bar input:focus + .search-btn:before, 
         .search-bar input:focus + .search-btn:after,
         .search-bar input:valid + .search-btn:before, 
         .search-bar input:valid + .search-btn:after {
         opacity: 1;
         }
         .search-bar input:focus + .search-btn:hover,
         .search-bar input:valid + .search-btn:hover,
         .search-bar input:valid:not(:focus) + .search-btn:focus {
         background: #0c48db;
         }
         .search-bar input:focus + .search-btn:active,
         .search-bar input:valid + .search-btn:active {
         transform: translateY(1px);
         }
         @media screen and (prefers-color-scheme: dark) {
         body, input {
         color: #f1f1f1;
         }
         .search-bar input {
         box-shadow: 0 0 0 0.4em #f1f1f1 inset;
         }
         .search-bar input:focus,
         .search-bar input:valid {
         background: #3d3d3d;
         box-shadow: 0 0 0 0.1em #3d3d3d inset;
         }
         .search-btn {
         background: #f1f1f1;
         }
         }
      </style>
      <style>
         section header {
         font-family: 'Comfortaa';
         font-size: 62px;
         }
      </style>
      <style>
         .card {
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
           max-width: 300px;
           margin: 30px;
           text-align: center;
           font-family: arial;
           background-color: #131313;
           border-radius: 10px;
           height: 600px
         }
         
         .price {
           color: grey;
           font-size: 22px;
         }
         
         .card button {
           border: none;
           padding: 12px;
           color: white;
           background-color: rgb(2, 93, 179);
           text-align: center;
           cursor: pointer;
           width: 50%;
           font-size: 18px;
           border-radius: 20px;
           margin-left: 75px;
           cursor: pointer;
           position: absolute;
           bottom: 0;
         }
         
         .card button:hover {
           opacity: 0.7;
         }


         html, body {
            overflow-x: hidden;
         }
      </style>
   <!--🎨Style CSS\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
   <!--✨META META META META META META META EMBEDS META META META META META META META META META META META META META META-->
      <meta name=description content="Official Website">
      <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
      <meta itemprop=name content=ACO>
      <meta itemprop=description content="Official Website">
      <meta itemprop=image content=https://i.ibb.co/hXKcGjy/aco-chip-set-logo-blue.png>
      <meta name=twitter:card content=summary_large_image>
      <meta name=twitter:title content=ACO Website>
      <meta name=twitter:description content="Official Website">
      <meta name=twitter:image content=https://i.ibb.co/hXKcGjy/aco-chip-set-logo-blue.png>
      <meta property=og:title content=ACO Website>
      <meta property=og:url content=https://ayaan-codes.github.io/web>
      <meta property=og:site_name content=ACO>
      <meta property=og:type content=website>
      <meta property=og:description content="Official Website">
      <meta property=og:image content=https://i.ibb.co/hXKcGjy/aco-chip-set-logo-blue.png>
   <!--✨META META META META META META META EMBEDS META META META META META META META META META META META META META META-->
   
<!-----⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕----->
</head>
<!-----⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕----->
<body onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
   <!--📄Script JS\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
      <noscript><meta http-equiv="refresh" content="0;url=https://ayaan-codes.github.io/doit/enable-js.html"></noscript>
      <script src="https://ayaan-codes.github.io/packages/script/scriptone.js"></script>
      <script src="https://ayaan-codes.github.io/packages/script/scripttwo.js"></script>
      <script src="https://ayaan-codes.github.io/packages/script/scriptthree.js"></script>
      <script src="https://ayaan-codes.github.io/packages/script/security.js"></script>
      <script>
      function disableCtrlKeyCombination(e)
      {
      //list all CTRL + key combinations you want to disable
      var forbiddenKeys = new Array('a', 'b', 'c', 'd', 'e', 'f' , 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',);
      var key;
      var isCtrl;
      if(window.event)
      {
      key = window.event.keyCode;     //IE
      if(window.event.ctrlKey)
      isCtrl = true;
      else
      isCtrl = false;
      }
      else
      {
      key = e.which;     //firefox
      if(e.ctrlKey)
      isCtrl = true;
      else
      isCtrl = false;
      }
      //if ctrl is pressed check if other key is in forbidenKeys array
      if(isCtrl)
      {
      for(i=0; i<forbiddenKeys.length; i++)
      {
      //case-insensitive comparation
      if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
      {
      alert('🔴 ACO WebModeration™ : ctrl + '+String.fromCharCode(key) +' has been disabled for security reasons.');
      return false;
      }
      }
      }
      return true;
      }
      var $root = $('html, body');

      $('a[href^="#"]').click(function() {
      var href = $.attr(this, 'href');

      $root.animate({
      scrollTop: $(href).offset().top
      }, 500, function () {
      window.location.hash = href;
      });

      return false;
      });
      </script>
      <script language=JavaScript>
         //Disable right mouse click Script
         
         var message="🔴 ACO WebModeration™ : Right click has been disabled for security reasons.";
         
         function clickIE4(){
         if (event.button==2){
         alert(message);
         return false;
          }
         }
         
         function clickNS4(e){
         if (document.layers||document.getElementById&&!document.all){
         if (e.which==2||e.which==3){
         alert(message);
         return false;
         }
         }
         }
         
         if (document.layers){
         document.captureEvents(Event.MOUSEDOWN);
         document.onmousedown=clickNS4;
         }
         else if (document.all&&!document.getElementById){
         document.onmousedown=clickIE4;
         }
         
         document.oncontextmenu=new Function("alert(message);return false")
      </script>
   <!--📄Script JS\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/\---/-->
   
   
<!-----🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵----->
      <section id="navbar">
         <nav class="navbar navbar-expand-lg navbar-dark navbar-blue">
            <a class="navbar-brand" href="#"><img src="../images/icoSmall.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about/index.php">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../products/index.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact/index.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://acogoogle.business.site/">Updates/More</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login/login.php">Login</a>
                        </li>
                    </ul>
            </div>
         </nav>
      </section>
      <section>
         <header class="home">Products</header>
      </section>
      <section class="search" id="productsbar">
         <form action="" class="search-bar">
            <input type="search" name="search" pattern=".*\S.*" required>
            <button class="search-btn" type="submit">
            <span>Search</span>
            </button>
         </form>
      </section>
      <section class="products" id="products">
         <div class="products">
            <div class='row d-flex justify-content-center'></div> 
                       
               <!-------------ROW 1-------------->        
               <div class='row d-flex justify-content-center'>
               <!-- ITEM ONE -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">

               
               </div>
               
               <!-- ITEM ONE-->  
               <!-- ITEM TWO -->
               <h2 style="text-align:center"></h2>
               

               <div class="card">
 
   
               </div>
               
               <!-- ITEM TWO-->  
               <!-- ITEM THREE -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
            

               </div>
               
               <!-- ITEM THREE-->
               </div>
               <!-------------ROW 1-------------->  

               <!-------------ROW 2-------------->   
               <div class='row d-flex justify-content-center'>
               <!-- ITEM FOUR -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM FOUR-->
               <!-- ITEM FIVE -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM FIVE-->
               <!-- ITEM SIX -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM SIX-->
               </div>
               <!-------------ROW 2-------------->   

               <!-------------ROW 3-------------->   
               <div class='row d-flex justify-content-center'>
               <!-- ITEM SEVEN -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM SEVEN-->
               <!-- ITEM EIGHT -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM EIGHT-->
               <!-- ITEM NINE -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               <!-- ITEM NINE--> 

               </div>
               <!-------------ROW 3-------------->   
               
               <!-------------ROW 4-------------->   
               <div class='row d-flex justify-content-center'>
               <!-- ITEM TEN -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                
               
               </div>
               
               <!-- ITEM TEN-->
               <!-- ITEM 11 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 11-->
               <!-- ITEM 12 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 12-->        
               </div>
               <!-------------ROW 4-------------->   

               <!-------------ROW 5-------------->   
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 13 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 13-->
               <!-- ITEM 14 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 14-->
               <!-- ITEM 15 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 15-->        
               </div>
               <!-------------ROW 5--------------> 

               <!-------------ROW 6--------------> 
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 16 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 16-->
               <!-- ITEM 17 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 17-->
               <!-- ITEM 18 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 18-->        
               </div>
               <!-------------ROW 6--------------> 

               <!-------------ROW 7--------------> 
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 19 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 19-->
               <!-- ITEM 20 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 20-->
               <!-- ITEM 21 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 21-->        
               </div>
               <!-------------ROW 7-------------->

               <!-------------ROW 8-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 22 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 22-->
               <!-- ITEM 23 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 23-->
               <!-- ITEM 24 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 24-->        
               </div>
               <!-------------ROW 8-------------->

               <!-------------ROW 9-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 25 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
                 
               
               </div>
               
               <!-- ITEM 25-->
               <!-- ITEM 26 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 26-->
               <!-- ITEM 27 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 27-->        
               </div>
               <!-------------ROW 9-------------->

               <!-------------ROW 10-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 28 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 28-->
               <!-- ITEM 29 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 29-->
               <!-- ITEM 30 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 30-->        
               </div>
               <!-------------ROW 10-------------->

               <!-------------ROW 11-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 31 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 31-->
               <!-- ITEM 32 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 32-->
               <!-- ITEM 33 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 33-->        
               </div>
               <!-------------ROW 11-------------->

               <!-------------ROW 12-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 34 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 34-->
               <!-- ITEM 35 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 35-->
               <!-- ITEM 36 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               </div>
               
               <!-- ITEM 36-->        
               </div>
               <!-------------ROW 12-------------->

               <!-------------ROW 13-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 37 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 37-->
               <!-- ITEM 38 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 38-->
               <!-- ITEM 39 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
               
               </div>
               <!-------------ROW 13-------------->
               <!-------------ROW 14-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 40 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 40-->
               <!-- ITEM 41 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 41-->
               <!-- ITEM 42 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
               
               </div>
               <!-------------ROW 14-------------->
               <!-------------ROW 15-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 43 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 43-->
               <!-- ITEM 44 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 44-->
               <!-- ITEM 45 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
               
               </div>
               <!-------------ROW 15-------------->
               <!-------------ROW 16-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 46 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 46-->
               <!-- ITEM 47 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 47-->
               <!-- ITEM 48 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
               
               </div>
               <!-------------ROW 16-------------->
               <!-------------ROW 17-------------->
               <div class='row d-flex justify-content-center'>
               <!-- ITEM 49 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 49-->
               <!-- ITEM 50 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
                 
               
               </div>
               
               <!-- ITEM 50-->
               <!-- ITEM 51 -->
               <h2 style="text-align:center"></h2>
               
               <div class="card">
               
               </div>
               <!-------------ROW 17-------------->
         </div>
      </section>

      <script src="../js/productrandomizer.js"></script>
      <script src="../js/search.js"></script>
   </body>
</html>

<!-----🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵🟣🔵----->


</body>
<!-----⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕🔴⭕----->
</html>




