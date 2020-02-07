<?php

include "../lib/DataLoader.php";

$data = DataLoader::loader();

ref::config('expLvl', 3);
r($data);