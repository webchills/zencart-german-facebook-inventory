<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.2.1' WHERE configuration_key = 'FACEBOOKINVENTORY_MODUL_VERSION' LIMIT 1;");