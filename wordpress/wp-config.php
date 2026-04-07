<?php

define('DB_NAME', 'dbsql1');
define('DB_USER', 'dbsql1');
define('DB_PASSWORD', 'passpass');
define('DB_HOST', '10.5.0.4');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
define('AUTH_KEY', 'aLe7TVsm+UeH=O8>v5dOj%z3`[+%P/mzfDxoZoRF)$Z;BvDZw4(g0_nFsT)B`uFV');
define('SECURE_AUTH_KEY', 'Lq:~=|xD=G[_>i3%$(NxD/iY7cud0.6G7;tGl.`N2}2au</C?nfy;Qn*]Fa`.Vf:');
define('LOGGED_IN_KEY', 'Fv3ExUi! 1@FvH3zyw_O+<*fKB&.mz:(+N%=[|^smDFV8[OW!gtrf.Kr1iS)@_N6');
define('NONCE_KEY', 'o6{NOQFaW]?41 h/)Y=]1&jJ/YllqUvqazF3a.Nj|ySSq<o1Wtz>8J!b;;/K-2g&');
define('AUTH_SALT', '2xStx.!V </.^@KOq n46(-ad[8=IMbrN_BOus$ {sp20|AP0iyhJi2K<!J#Rol@');
define('SECURE_AUTH_SALT', 'Yw1165z3@M=DNFz96OdtN18?gF&>L1dOc/u&2>z5j zl$>Veu[1f?&GOoOV~*F6j');
define('LOGGED_IN_SALT', 'w|%luFC,r)U*O s40}sY.o>)B-T>kdxw63H=x0Nm`Ap10*kId-KG*V}T=$gWs)qu');
define('NONCE_SALT', 'ZD|)/pUpgz*9-{<$[xB1TS@Sl-aww^Ex+D&n4-A7{e2>-,nJ+)t_7ql%e<%HMe7F');
$table_prefix = 'wp_';
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
define('SCRIPT_DEBUG', true);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__.'/');
}
require_once ABSPATH.'wp-settings.php';
