#! /bin/bash

(
    cd "$(dirname "$0")/.."

    generated=$(php README.php)
    echo -n "<!-- Generated File, do not edit -->\n$generated" > README.md
)
