<?php

// Inkludera data.php och header.php
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

?>

<h2>Teams</h2>
<div>
    <ul>
        <?php
        // Loopa igenom alla lag i $teams och skapa en lista
        foreach ($teams as $teamName => $teamData) {
            // Skapa en länk för varje lag
            echo '<li><a href="team.php?name=' . urlencode($teamName) . '">' . ($teamName) . '</a></li>';
        }
        ?>
    </ul>
</div>