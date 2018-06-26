<?php

$url = parse_url(getenv("DATABASE_URL"));

return (object) array(
    'db_server' =>$url["host"],
    'db_username' => $url["user"],
    'db_pass' => $url["pass"],
    'db_database' => substr($url["path"], 1),
    'channelID' => '1493623889',
    'channelAccessToken' => 'XCBJd9Dqc1kfB/VLFnVuEWJ/AjkLXgLdLnSbGuqXeMDwvpfV/XF3iHVtZNso7Jq4onCK9fmbHQ8MZsgrU7ZjCS1+tQk+STz2/0gm4Juod3sG7lRtRmv6bRGtGPAZABQqH3593dxp7W+ladz/KDMR0gdB04t89/1O/w1cDnyilFU=',
    'channelSecret' => 'd831e7e4bd15e966b258ed6757a9cb99'
);

?>
