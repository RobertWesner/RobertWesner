<?php

require __DIR__ . '/src/autoload.php';

/**
 * Prevents caching
 */
$hash = sprintf('?%d', time());

?>
<!-- Yep, this README is completely over the top -->

Quick Links:
<div>
<a href="https://robertwesner.github.io/knowledge/">
<img src="./img/quicklinks/knowledge.png" height="28" alt="Knowledge timeline">
</a>
<a href="https://scripts.yt">
<img src="./img/quicklinks/scriptsyt.png" height="28" alt="scripts dot yt - custom youtube scripts">
</a>
<a href="https://clammers.net/">
<img src="./img/quicklinks/clammersnet.png" height="28" alt="Beta 1.7.3 minecraft community">
</a>
<a href="https://clammers.net/discord">
<img src="./img/quicklinks/discord.png" height="28" alt="Discord community">
</a>
</div>

## About

> Currently low on devtime due to long-time health struggles. Thank you for waiting <3

Random guy in Germany, professionally working as software dev.<br>
Bivalve mollusc aficionado with a clean-shaven scalp. Trying to leave my mark before the abyss claims me.<br>
Spending my free time writing tools to make my life easier, you might benefit from them as well.

Maintaining and contributing to plugins and applications for beta 1.7.3 Minecraft.

PHP8 defender, Gopher lover, Kotlin enjoyer, <a href="https://robertwesner.github.io/knowledge/">decently competent in many others</a>.<br>
Can't stand the taste of Java, but can't always choose.


## Projects

### Userscripts

Maintaining various userscripts for YouTube since 2024 to improve on the diminishing UX.

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


### PHP

Small PHP libraries for personal projects.<br>
Most of my websites are hosted with these. Dogfooding is good fooding.

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


### Beta Minecraft

Est. 2025. Mostly FOSS, partially private code for [my own public server](https://clammers.net/).<br>
Below is a non-exhaustive list of my free and open-source plugins/applications for b1.7.3.

Developer/contributor on:<br>
<a href="https://github.com/betamcserver"><img height="32" src="https://avatars.githubusercontent.com/u/185454749?s=200&v=4" alt="BetaMC.org"></a>
<a href="https://github.com/retromcorg"><img height="32" src="https://avatars.githubusercontent.com/u/44775441?s=200&v=4" alt="BetaMC.org"></a>
<a href="https://github.com/legacyminecraft"><img height="32" src="https://avatars.githubusercontent.com/u/285248894?s=200&v=4" alt="BetaMC.org"></a>

#### Plugins

<?= Table::build(
    ['ClamPlace', 'ClamVote', 'ClamWorld', 'Poseidon ModernInventory'],
    [
        [
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/clamplace">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/clamplace.png',
                    'Backport for modern Minecraft building features to beta',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/ClamVote">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/clamvote.png',
                    'Custom Votifier v1 implementation',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/clamworld-core">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/clamworld.png',
                    'Kotlin DSL for disposable worlds from templates',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/PoseidonModernInventory">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/poseidonmoderninventory.png',
                    'Backport for modern Minecraft inventory features to beta',
                )
            ),
        ],
        [
            'The highly adored server-side backport for modern building features. Sneak placement and plenty more!',
            'From-scratch implementation of the Votifier v1 protocol for beta minecraft.',
            'Custom Kotlin DSL for creating and managing primarily disposable worlds from templates. Made for minigames. Supports persistence.',
            '(Work in progress) A fully server-side packet-based backport of modern inventory features like stack crafting made for Project Poseidon.',
        ],
    ],
) ?>


#### Miscellaneous

<?= Table::build(
    ['ClamClient', 'ClamProtect', '???'],
    [
        [
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/ClamClient">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/clamclient.png',
                    'Beta Minecraft client written in Go',
                )
            ),
            sprintf(
                <<<HTML
                <div align="center">
                    <a href="https://github.com/RobertWesner/ClamProtectCore">%s</a>
                </div>
                HTML,
                Image::build(
                    '/img/projects/beta/clamprotect.png',
                    'High performance LogBlock alternative',
                )
            ),
//            sprintf(
                <<<HTML
                <div align="center">
                    <a href="#tba"><!--%s--></a>
                </div>
                HTML,
//                Image::build(
//                    '/img/projects/beta/clamworld.png',
//                    'Kotlin DSL for disposable worlds from templates',
//                )
//            ),
        ],
        [
            '[WIP] Beta Minecraft version b1.7.3 compatible client written in Go. No usage of Mojang or MS code or assets.',
            '[VERY WIP] Asynchronous block change logging and rollback functionality with worker pools and LogBlock compatibility.',
            'TBA',
        ],
    ],
) ?>

<br>

<!-- /ᐠ｡ꞈ｡ᐟ\ -->
<a href="https://www.reddit.com/r/05cats/comments/1uwex32/jonny_gobsmacked/">
<img height="64" src="/img/schmving.gif" alt="send me your funny cats please" align="right">
</a>
