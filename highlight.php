<?php

  $hl = new Highlight\Highlighter();


  $hl->setAutodetectLanguages(array('ruby', 'python', 'php'));


  $r = $hl->highlightAuto(file_get_contents('index.php'));

  // Output the code using the default stylesheet:
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Link to the stylesheets: -->
<!--    <link rel="stylesheet" type="text/css" href="styles/default.css">-->
  </head>
  <body>
    <pre class="hljs <?= $r->language ?>">
      <?= $r->value ?>
    </pre>
  </body>
</html>