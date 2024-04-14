<?php

namespace services;

trait Authorization
{
    private function redirect($route)
    {
        header($route);
        exit;
    }
}
