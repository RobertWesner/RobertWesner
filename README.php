<?php

require __DIR__ . '/src/autoload.php';

/**
 * Prevents caching
 */
$hash = sprintf('?%d', time());

?>
<!-- Yep, this README is completely over the top -->
<!--
## Who am I?

Wish, I knew...
-->

## Knowledge

I have been a full-time software developer since late 2019 and spend much of my time outside work honing these skills.

You can find a complete timeline [here](https://robertwesner.github.io/knowledge/).

## Projects

### Userscripts

I am working on various userscripts for YouTube to improve the user experience.

You can find more details on [scripts.yt](https://scripts.yt/).

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


### PHP

<?= Table::build(
    ['AWDY', 'Simple PHP MVC', 'Dependency Injection'],
    [
        [
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/awdy">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/php/awdy_rounded.gif',
                    'Are We Done Yet? Spice up your PHP-scripts with progress-bars and more! ',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/simple-mvc-php">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/php/simplemvc.png',
                    'A simple PHP back end designed for semi-static content.',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/dependency-injection">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/php/dependency-injection.png',
                    'A fun PSR-11 container with autowiring.',
                )
            ),
        ],
    ],
) ?>


### Games

<?= Table::build(
    ['Nonogram.ME (closed source)', ''],
    [
        [
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://nonogram.me/">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/games/nonogramme.png',
                    'Nonogram.ME - Free Nonograms',
                )
            ),
        ],
    ],
) ?>


<br>
<img src="/img/schmvs.png" alt="/ᐠ｡ꞈ｡ᐟ\">
