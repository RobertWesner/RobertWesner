<?php

require __DIR__ . '/src/autoload.php';

/**
 * Prevents caching
 */
$hash = sprintf('#%d', time());

?>
<!-- Yep, this README is completely over the top -->

## Who am I?

Wish, I knew...

## Projects

### Userscripts

<?= Table::build(
    ['YouTube-Play-All', 'YouTube-Shadow-Comment', 'YouTube-O-Clock'], [
        [
            <<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-Play-All">
                    <img src="img/projects/userscripts/youtube/ytpa.png$hash">
                </a>
            </div>
            HTML,
            <<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-Shadow-Comment">
                    <img src="img/projects/userscripts/youtube/ytsc.png$hash">
                </a>
            </div>
            HTML,
            <<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-O-Clock">
                    <img src="img/projects/userscripts/youtube/ytoc.png$hash">
                </a>
            </div>
            HTML,
        ],
    ],
) ?>


### Security

<?= Table::build(
    ['TITRYES'], [
    [
        <<<HTML
        <div align="center">
            <a href="https://github.com/RobertWesner/titryes">
                <img src="img/projects/security/titryes.png$hash">
            </a>
        </div>
        HTML,
    ],
],
) ?>


### Other

