<?php

require __DIR__ . '/src/autoload.php';

/**
 * Prevents caching
 */
$hash = sprintf('?%d', time());

?>
<!-- Yep, this README is completely over the top -->
<!-- don't mind me testing stuff -->
<!--
## Who am I?

Wish, I knew...
-->

## Projects

### Userscripts

<?= Table::build(
    ['YouTube-Play-All', 'YouTube-Shadow-Comment', 'YouTube-O-Clock'],
    [
        [
            sprintf(<<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-Play-All">%s</a>
            </div>
            HTML, Image::build('/img/projects/userscripts/youtube/ytpa.png')),
            sprintf(<<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-Shadow-Comment">%s</a>
            </div>
            HTML, Image::build('/img/projects/userscripts/youtube/ytsc.png')),
            sprintf(<<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/YouTube-O-Clock">%s</a>
            </div>
            HTML, Image::build('/img/projects/userscripts/youtube/ytoc.png')),
        ],
    ],
) ?>


### Security

<?= Table::build(
    ['TITRYES', ''],
    [
        [
            sprintf(<<<HTML
            <div align="center">
                <a href="https://github.com/RobertWesner/titryes">%s</a>
            </div>
            HTML, Image::build('/img/projects/security/titryes.png')),
        ],
    ],
) ?>


### Other


<?= Table::build(
    ['AWDY', ''],
    [
        [
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/awdy">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/other/awdy_rounded.gif',
                    'Are We Done Yet? Spice up your PHP-scripts with progress-bars and more! ',
                )
            ),
        ],
    ],
) ?>


<br>
<img src="/img/schmvs.png" alt="/ᐠ｡ꞈ｡ᐟ\">
