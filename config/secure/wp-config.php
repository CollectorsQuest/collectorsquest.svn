<?php

if (SF_ENV === 'staging')
{
  define('DB_NAME', 'collectorsquest_stg');
  define('DB_USER', 'staging');
  define('DB_PASSWORD', 'KC93pNXux7x4FP');
  define('DB_HOST', 'master.cwvkronpbfrx.us-east-1.rds.amazonaws.com');
}
else
{
  define('DB_NAME', 'collectorsquest_blog');
  define('DB_USER', 'collectorsquest');
  define('DB_PASSWORD', 'TYN9KJ76gpy7fq');
  define('DB_HOST', 'master.cwvkronpbfrx.us-east-1.rds.amazonaws.com');
}

define('AUTH_KEY',         'q:Nq)ugtJ%2PJc<c]HsyEg. D*w<xv8TqGrD|m]/V+S:a_5HPxs|YEqo,e)GIY-t');
define('SECURE_AUTH_KEY',  'Rx~~x|&CrRz4X?/BDmx_Uf[aQa)YoQky%+xT.S+:q<.cBVm+Mt>1kLZG=v+x-I:T');
define('LOGGED_IN_KEY',    '$t~F$xm#)tVr}#2kS0=K3+IAxx?aTYZ+Jp~oI#j>z.qocC4NZxN+mDq23|`8I7|.');
define('NONCE_KEY',        '1&u~V6,#S$)HO,G]nhl?g|6}e8HY_r8TIj2q[!VnUfb(V,YY%@-9Ko=-2n|6WQk4');
define('AUTH_SALT',        'xbQ:K*Q,H|e[Q6+:iN myiw9OP<G^&iIu!3,%t{Nf4.)8I_c#F-9eL?AD(tB[Z9+');
define('SECURE_AUTH_SALT', 'TiA1!n6-|HXPn6H)b%@eRvs#[?O+G^I(!M2Ncfya}t$Mo!4:}=5TfZLLn1?vsnb[');
define('LOGGED_IN_SALT',   'V5YZ-d8;GV5c!lZO-+P{b%T%|4O{E;;lkS?T-.snSV6w lpylW:oa3gCxoXJ()`P');
define('NONCE_SALT',       '%AF6uwZA7jeO3m7]UZ/&n9F{~XDi+/4Ii#Xom5jFXz-f^1G jh3n!$O&<c.)F(%E');
