 <!DOCTYPE html>
 <html lang="fr" dir="ltr">

 <head>
     <meta charset="utf-8">
     <title>Application méteo</title>
     <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
 </head>

 <body>
     <div class="wrapper">
         <header><i class="bx bx-left-arrow-alt"></i>App Meteo</header>
         <section class="input-part">
             <p class="info-txt"></p>
             <div class="content">
                 <input type="text" spellcheck="false" placeholder="Entre un nom de ville" required="">
                 <div class="separator"></div>
                 <button>Obtention de la localisation</button>
             </div>
         </section>
         <section class="weather-part">
             <img src="http://openweathermap.org/img/wn/${icon}@2x.png" alt="Weather Icon">
             <div class="temp">
                 <span class="numb">_</span>
                 <span class="deg">°</span>C
             </div>
             <div class="weather">_ _</div>
             <div class="location">
                 <i class="bx bx-map"></i>
                 <span>_, _</span>
             </div>
             <div class="bottom-details">
                 <div class="column feels">
                     <i class="bx bxs-thermometer"></i>
                     <div class="details">
                         <div class="temp">
                             <span class="numb-2">_</span>
                             <span class="deg">°</span>C
                         </div>
                         <p>Resentie</p>
                     </div>
                 </div>
                 <div class="column humidity">
                     <i class="bx bxs-droplet-half"></i>
                     <div class="details">
                         <span>_</span>
                         <p>Humidite</p>
                     </div>
                 </div>
             </div>
         </section>
     </div>

     <script src="script.js"></script>


 </body>

 </html>