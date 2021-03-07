<?php

use DevCoder\Route;

return [
    new Route('home', '/', [\App\Controller\MainController::class])
];
