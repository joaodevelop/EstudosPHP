<?php
    //Métodos HTTP
    /*GET solicita apresentação de recurso
    POST = envio de dados ao servidor
    PUT Atualização de dados
    DElETE Remoção de dados
    PAtch atualização de dado específico */

    /*VARIÁVEIS GLOBAIS
    $_ENV //variáveis de ambiente
    $_GET //Paramatros enviados via request GET
    $_POST //Parametros enviados via request POST
    $_COOKIE //Valores de cookies
    $_SERVER //INformações do servidor
    $_FILES //Informações de arquivos via upload. */

    //SERVER
    print_r($_SERVER);
    /* Array ( [HTTP_HOST] => localhost [HTTP_CONNECTION] => keep-alive [HTTP_UPGRADE_INSECURE_REQUESTS] => 1 [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,/*;q=0.8,application/signed-exchange;v=b3;q=0.9 [HTTP_SEC_FETCH_SITE] => none [HTTP_SEC_FETCH_MODE] => navigate [HTTP_SEC_FETCH_USER] => ?1 [HTTP_SEC_FETCH_DEST] => document [HTTP_SEC_CH_UA] => "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108" [HTTP_SEC_CH_UA_MOBILE] => ?0 [HTTP_SEC_CH_UA_PLATFORM] => "Windows" [HTTP_ACCEPT_ENCODING] => gzip, deflate, br [HTTP_ACCEPT_LANGUAGE] => pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7 [HTTP_COOKIE] => _ga=GA1.1.613566869.1670855072; _ga_7JQT8R8ZNT=GS1.1.1670951493.5.0.1670951493.0.0.0 [PATH] => C:\Python311\Scripts\;C:\Python311\;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\Git\cmd;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\ProgramData\chocolatey\bin;C:\Program Files\nodejs\;C:\Program Files\dotnet\;C:\Users\TSA\AppData\Local\Microsoft\WindowsApps;;C:\Users\TSA\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\TSA\AppData\Roaming\Composer\vendor\bin;C:\Users\TSA\AppData\Roaming\npm;C:\Users\TSA\.dotnet\tools [SystemRoot] => C:\Windows [COMSPEC] => C:\Windows\system32\cmd.exe [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW [WINDIR] => C:\Windows [SERVER_SIGNATURE] => [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1q PHP/8.1.10 [SERVER_NAME] => localhost [SERVER_ADDR] => ::1 [SERVER_PORT] => 80 [REMOTE_ADDR] => ::1 [DOCUMENT_ROOT] => C:/laragon/www [REQUEST_SCHEME] => http [CONTEXT_PREFIX] => [CONTEXT_DOCUMENT_ROOT] => C:/laragon/www [SERVER_ADMIN] => admin@example.com [SCRIPT_FILENAME] => C:/laragon/www/Intermediario/phpweb/index.php [REMOTE_PORT] => 63146 [GATEWAY_INTERFACE] => CGI/1.1 [SERVER_PROTOCOL] => HTTP/1.1 [REQUEST_METHOD] => GET [QUERY_STRING] => [REQUEST_URI] => /intermediario/phpweb/ [SCRIPT_NAME] => /intermediario/phpweb/index.php [PHP_SELF] => /intermediario/phpweb/index.php [REQUEST_TIME_FLOAT] => 1671019081.159 [REQUEST_TIME] => 1671019081 ) */

    echo "<br>";
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>"; //pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7
    if($_SERVER['SERVER_NAME'] == 'localhost'){
        echo "O nome do server é localhost"; //O nome do server é localhost
    }

    //FORMULARIOS
    