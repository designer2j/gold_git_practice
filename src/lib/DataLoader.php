<?php
include __DIR__."/../../vendor/autoload.php";

use Symfony\Component\Yaml\Yaml;

class DataLoader 
{
    const YAML_FILE = __DIR__.'/../config.yaml';

    public static function loader()
    {
        return Yaml::parseFile(self::YAML_FILE);
    }
}
