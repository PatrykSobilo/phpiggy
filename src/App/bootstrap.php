<?php 

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controlers\{HomeController, AboutController};

$app = new App();

$app->get('/', [HomeController::class, 'home']);
$app->get('/about', [AboutController::class, 'about']);

return $app;
?>