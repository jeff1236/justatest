<?php
    //once app.php is called and returns the application object at the end of its
    //code, that object is stored in '$website'. We use that object to start our
    //web app by calling its 'run' method.
    $website = require_once __DIR__.'/../app/app.php';
    $website->run();
?>
