<?php 

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

$app = new App();

$app->add('/');

dd($app);

return $app;
?>