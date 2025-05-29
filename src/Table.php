<?php

final class Table
{
    /**
     * @param string[] $header
     * @param string[][] $content
     */
    public static function build(array $header, array $content): string
    {
        $result = '<tr>';
        $width = 100 / count($header) . '%';
        foreach ($header as $column) {
            $result .= sprintf('<th width="%s">%s</th>', $width, $column);
        }
        $result .= '</tr>';

        foreach ($content as $row) {
            $result .= '<tr>';
            foreach ($row as $column) {
                $result .= sprintf('<td>%s</td>', $column);
            }
            $result .= '</tr>';
        }

        return sprintf('<table>%s</table>', $result);
    }
}
