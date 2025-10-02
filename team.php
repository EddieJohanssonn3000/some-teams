<?php
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

$teamName = $_GET['name'];
$team = $teams[$teamName];
?>

<?php if ($team): ?>
    <h2><?= $teamName ?></h2>
    <p>League: <?= $team['league'] ?></p>
    <p>City: <?= $team['city'] ?></p>
    <p>UEFA Ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
    <p><a href="<?= $team['url'] ?>">Official Website</a></p>
    <img src="<?= $team['logo'] ?>" alt="<?= $teamName ?> Logo" width="100">
    <h3>Opponents</h3>
    <ul>
        <?php foreach ($team['opponents'] as $opponent): ?>
            <li><?= $opponent ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>