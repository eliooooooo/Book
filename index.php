<?php include('./data.php'); ?>

<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Portfolio de BURKLE Eliott" />
  <meta property="og:description" content="Découvrez mes projets de développement web, incluant des applications dynamiques, des sites responsive et bien plus." />
  <meta property="og:image" content="Découvrez mes projets de développement web, incluant des applications dynamiques, des sites responsive et bien plus." />
  <meta name="description" content="Découvrez mes projets de développement web, incluant des applications dynamiques, des sites responsive et bien plus.">
  <meta name="title" content="Portfolio de BURKLE Eliott">
  <meta name="keywords" content="Eliott BURKLE, Portfolio, Développeur">
  <meta name="author" content="Eliott BURKLE">
  <link rel="stylesheet" href="./dist/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
  <title>Eliott BURKLE - Portfolio</title>
</head>

<body class="bg h-full">
  <div class="circleContainer absolute w-full mx-auto min-h-[665px] h-full p-8 flex flex-col justify-between gap-2"> 
    <div class="flex flex-row justify-between gap-4" >
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle hidden sm:block"></div>
      <div class="circle hidden md:block"></div>
      <div class="circle hidden lg:block"></div>
      <div class="circle hidden xl:block"></div>
    </div>
    <div class="flex flex-row justify-between gap-4" >
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle hidden sm:block"></div>
      <div class="circle hidden md:block"></div>
      <div class="circle hidden lg:block"></div>
      <div class="circle hidden xl:block"></div>
    </div>
    <div class="flex flex-row justify-between gap-4" >
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle hidden sm:block"></div>
      <div class="circle hidden md:block"></div>
      <div class="circle hidden lg:block"></div>
      <div class="circle hidden xl:block"></div>
    </div>
    <div class="flex flex-row justify-between gap-4" >
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>        
      <div class="circle hidden sm:block"></div>
      <div class="circle hidden md:block"></div>
      <div class="circle hidden lg:block"></div>
      <div class="circle hidden xl:block"></div>
    </div>
    <div class="flex flex-row justify-between gap-4" >
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle hidden sm:block"></div>
      <div class="circle hidden md:block"></div>
      <div class="circle hidden lg:block"></div>
      <div class="circle hidden xl:block"></div>
    </div>      
  </div>
  <main class="container relative mx-auto w-full h-full">
    <div class="themeSwitcher hidden hover:scale-110 transition-all cursor-pointer absolute top-0 right-0 p-2 sm:p-3 z-20 bg-black dark:bg-white text-slate-300 dark:text-blue1 rounded-full m-3 sm:m-5" style="display: none;">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" id="moon" class="bi bi-moon-stars" viewBox="0 0 16 16">
        <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" id="sun" class="bi bi-brightness-low-fill" viewBox="0 0 16 16">
        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707M3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707"/>
      </svg>
    </div>
    <div class="global absolute top-20 w-full pl-4 xs:pl-12 sm:pl-20 text-black dark:text-white z-50">
      <h1 class="text-left text-2xl sm:text-3xl lg:text-4xl cursor-default"><span class="madimi-one-regular text-5xl sm:text-7xl lg:text-8xl">El<span class="rotateLetter text-orange-500 dark:text-yellow-400 inline-block">i</span>ott BURKLE</span><br> <span class="mt-2 sm:mt-4 md:mt-6 block">Développeur web</span></h1>
      <nav class="mt-10 border-t-2 border-orange-500 dark:border-yellow-400 w-fit pt-4">
        <ul class="nav text-lg pr-6">
          <li class="active" id="infos">Infos</li>
          <li id="projets">Projets</li>
          <li id="CV"><a href="./src/CV-BURKLE-ELIOTT.pdf" target="_blank">Mon CV</a></li>
          <li id="contact">Contact</li>
        </ul>
      </nav>
    </div>
      <div class="infosContainer absolute bottom-10 right-10 text-black dark:text-white max-w-[220px] text-lg">
        <p>Actuellement étudiant et alternant dans le développement web, j'aime apprendre et m'inition à de nouvelles pratiques, de nature "touche à tout" je pratique le développement <span class="text-orange-500 dark:text-yellow-400" >Full Stack</span>.</p>
      </div>
      <div class="projetsContainer projets hidden absolute bottom-10 mx-auto w-full px-4 xs:px-12 sm:px-20 text-lg">
        <div class="swiper swiperProjet relative overflow-visible">
          <div class="flex flex-row items-center gap-4 text-orange-500 dark:text-yellow-400 mb-4">
            <div class="swiper-pagination dark:bg-yellow-400 bg-orange-500 h-[2px] w-full mr-2 sm:mr-8 md:mr-14 lg:mr-20" ></div>
            <div class="swiper-button-prev cursor-pointer hover:scale-110 transition-all">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
              </svg>
            </div>
            <div class="swiper-button-next cursor-pointer hover:scale-110 transition-all">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
              </svg>
            </div>
          </div>
          <div class="swiper-wrapper select-none">
            <?php foreach ($data as $key => $element) {?>
            <div class="swiper-slide relative">
              <span class="badge absolute block -top-3 bg-orange-500 dark:bg-yellow-400 w-fit px-2 rounded-3xl"><?php echo $element['tip'] ?></span>
              <h2 class="font-bold text-2xl"><?php echo $element['title'] ?></h2>
              <p class="mt-4">
                <?php echo $element['plot'] ?>
              </p>
              <div class="flex flex-row items-center justify-around mt-auto">
                <a href="<?php echo $element['git'] ?>" target="_blank" class="buttonPrimary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                  </svg>
                  Voir sur Github</a>
                  <?php if (isset($element['link'])) {?>
                  <a href="<?php echo $element['link']?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                      <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                    </svg></a>
                  <?php } else { ?>
                    <span class="h-5 w-5 block" ></span>
                  <?php } ?>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="ml-auto mr-0">
            <a href="https://github.com/eliooooooo?tab=repositories" class="buttonPrimary" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
              </svg>
              <span>Voir tous les projets</span>
            </a>
          </div>
        </div>
      </div>
      <div class="contactContainer hidden absolute text-right right-10 bottom-10 mx-auto max-w-[220px]">
        <div class="text-black dark:text-white">
          <div>
            <p class="text-xl w-fit ml-auto border-b-[2px] border-orange-500 dark:border-yellow-400">Retrouvez-moi sur :</p>
            <ul class="flex flex-row gap-6 justify-end mt-5 mb-2 ">
              <li>
                <a href="https://github.com/eliooooooo" class="hover:text-orange-500 hover:dark:text-yellow-400 transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/eliott-burkle/" class="hover:text-orange-500 hover:dark:text-yellow-400 transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                  </svg>
                </a>
              </li>
            </ul>
            <span class="block w-fit ml-auto mb-2 border-b-[2px] border-orange-500 dark:border-yellow-400 text-xl">ou par mail :</span>
            <span class="text-lg">eliott.burkle@gmail.com</span>
          </div>
          <p class="mt-8 text-lg"><span class="text-orange-500 dark:text-yellow-400">N'hésitez pas</span> à me contacter pour toute opportunité, question ou commentaire. Je serai ravi de vous répondre.</p>
          <div class="flex flex-row items-center justify-around mt-8">
        </div>
      </div>
      
  </main>
  <footer></footer>

  <script src="./dist/main.js"></script>
</body>

</html>