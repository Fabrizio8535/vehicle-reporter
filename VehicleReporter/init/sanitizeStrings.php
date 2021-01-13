<?php

function escape($stringToSanitize)
{
    return htmlentities($stringToSanitize, ENT_QUOTES, 'UTF-8');
}

