<?php

$hash = $Collector->getAutoLoginHash();
echo link_to('Auto Login', url_to_frontend('collector_auto_login', array('hash' => $hash)), array('target' => '_blank'));
