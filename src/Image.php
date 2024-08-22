<?php

final class Image
{
    public static function build(string $path, ?string $alt = null): string
    {
        $pathinfo = pathinfo($path);
        $htmlPath = __DIR__ . '/../' . $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.html';
        if (file_exists($htmlPath) && $alt === null) {
            $domDocument = new DOMDocument();
            $domDocument->loadHTML(file_get_contents($htmlPath));
            $alt = preg_replace('/\s{2,}/', ' - ', trim($domDocument->textContent));
        }

        return sprintf(
            '<img src="%s?%d" alt="%s">',
            htmlentities($path),
            time(),
            htmlentities($alt ?? 'Image could not be loaded'),
        );
    }
}
