#! /bin/bash

(
    cd "$(dirname "$0")/.."

    generated=$(php README.php)
    printf "<!-- Generated File, do not edit -->\n$generated" > README.md
)
