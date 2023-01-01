<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi-FI', array (
));

$catalogueFi = new MessageCatalogue('fi', array (
));
$catalogue->addFallbackCatalogue($catalogueFi);

return $catalogue;
