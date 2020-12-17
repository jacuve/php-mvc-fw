<?php

namespace app\core;

class Request
{
    // TODO , implementar. min 25
    // video: 
    //https://www.youtube.com/watch?v=6ERdu4k62wI&feature=youtu.be

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false){
            return $path;
        }
        $path = substr($path,0,$position);
        return $path;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}