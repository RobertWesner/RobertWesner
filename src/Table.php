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
        foreach ($header as $column) {
            $result .= sprintf('<th width="10000">%s</th>', $column);
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
