<?php

class Config
{
    public static function get($pathName = null)
    {
        if($pathName)
        {
            $config = $GLOBALS['siteConfig'];
            $pathName = explode('/', $pathName);
            foreach ($pathName as $innerValue)
            {
                if(isset($config[$innerValue]))
                {
                $config = $config[$innerValue];
                }
            }
            return $config;
        }
        return false;
        
    }
}
