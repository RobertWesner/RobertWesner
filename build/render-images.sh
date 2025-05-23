#! /bin/bash

WIDTH=640
HEIGHT=360
ROUND=30

(
    cd "$(dirname "$0")/.."

    magick -size "${WIDTH}x${HEIGHT}" xc:none -draw "roundrectangle 0,0,$WIDTH,$HEIGHT,$ROUND,$ROUND" mask.png
    for filename in $(find img -name '*.html'); do
        image=${filename%.*}.png
        chromium --headless ---chrome-frame --window-size=$WIDTH,$((HEIGHT + 200)) --disable-gpu --screenshot="$image" $filename
        mogrify -crop "${WIDTH}x${HEIGHT}+0+0" $image
        magick $image -alpha Set mask.png -compose DstIn -composite $image
        mogrify -strip $image
    done
)
