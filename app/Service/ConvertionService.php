<?php

class ConvertionService
{

    public function __construct()
    {
    }

    public function timeToString($time, $format = '%02dh %02dmin'): string
    {
        if ($time < 1) {
            return "";
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
}