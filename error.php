<?php
// Récupère le code et le message d'erreur depuis l'URL ou définit des valeurs par défaut
$code = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : 'Erreur';
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : "Une erreur est survenue.<br><span class=\"text-orange-500 dark:text-yellow-400\">Retournez à l'accueil ou contactez-moi si besoin.</span>";
// Messages prédéfinis pour certains codes courants
$defaultMessages = [
  '404' => "Oups ! Cette page n'existe pas.<br><span class=\"text-orange-500 dark:text-yellow-400\">Retournez à l'accueil ou contactez-moi si besoin.</span>",
  '500' => "Erreur interne du serveur.<br><span class=\"text-orange-500 dark:text-yellow-400\">Veuillez réessayer plus tard ou contactez-moi.</span>",
  '403' => "Accès refusé.<br><span class=\"text-orange-500 dark:text-yellow-400\">Vous n'avez pas la permission d'accéder à cette page.</span>",
];
if (isset($defaultMessages[$code]) && !isset($_GET['message'])) {
  $message = $defaultMessages[$code];
}
?>

<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erreur - Eliott BURKLE</title>
  <link rel="stylesheet" href="./dist/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>

<body class="bg h-full">
  <div class="circleContainer absolute w-full mx-auto min-h-[665px] h-full p-8 flex flex-col justify-between gap-2">
    <!-- Reprise du fond animé -->
    <?php for ($i = 0; $i < 5; $i++) { ?>
      <div class="flex flex-row justify-between gap-4">
        <?php for ($j = 0; $j < 8; $j++) { ?>
          <div class="circle<?php if ($j >= 4) echo ' hidden ' . ['','sm:block','md:block','lg:block','xl:block'][$j-3]; ?>"></div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
  <main class="container relative mx-auto flex flex-col w-full h-full justify-center items-center pb-20">
    <div class="global relative mt-32 w-full max-w-xl px-6 text-center text-black dark:text-white z-50">
      <h1 class="madimi-one-regular text-7xl sm:text-8xl text-orange-500 dark:text-yellow-400 mb-4"><?php echo $code; ?></h1>
      <h2 class="text-2xl sm:text-3xl mb-6"><?php echo ($code === '404') ? "Oups ! Cette page n'existe pas." : "Une erreur est survenue"; ?></h2>
      <p class="mb-8 text-lg"><?php echo $message; ?></p>
      <a href="./index.php" class="buttonPrimary mx-auto w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house mr-2" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 2 7.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.5a.5.5 0 0 0-.146-.354l-6-6zM13 14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8.707l5-5 5 5V14z"/>
        </svg>
        Retour à l'accueil
      </a>
    </div>
  </main>
  <footer></footer>
  <script src="./dist/main.js"></script>
</body>
</html>