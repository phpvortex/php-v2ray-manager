<?php

$config = require __DIR__ . '/../config/v2ray.php';

require_once __DIR__ . '/../src/Services/V2rayApiService.php';

$v2ray = new V2rayApiService($config);

// Usage example

echo $v2ray->login();
