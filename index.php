<?php

declare(strict_types=1);
require __DIR__ . '/functions.php'; /*Load file "functions" */
include __DIR__ . '/header.php';

?>

<main>
    <p><?= date('l d F') ?></p>
    <h1>GREAT ADVICE</h1>
    <div class="advice">
        <p><?= randomAdvice($advice); ?></p>
    </div>
</main>
<?php include __DIR__ . '/footer.php'; ?>