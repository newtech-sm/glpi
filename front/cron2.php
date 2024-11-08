<?php

$token = $_SERVER['HTTP_TOKEN'];
$key = "ntmsl8B0TapbW7xB9RUxDyboZiEFg90cHWMG69V27JTjg9QKG3Jt2=Z/2qF!Q=543XKSWp9ab3?NGCn-/akevfFvQ9W/d4HaocT9FT51F/srsrbGbokvgOXanp/eNbLwknGjOUWUT-k/p97?7cihflWi1/9iHsnuzPiaj!?rb0HY4LQ6zHMeBaw/lsYmYf7X/qYIUkBldpO8=CgWK59gj3tZh3xbckk/0ipZ=XMnhq5NpNZCZG89Ic6vEADc7cs-Wtv=B0Mkd2cyA2Fc9n9uxanFY5=VdBtVdtmpk5mNe8haU!hAX2M=h0lPTft66eKk!A/pPAo-X=?JD0oRMs4suCqKUFAg0QZV-43t0WWiKaZXZMQ5L/CkdDgk/8sqjadLkSD4WTe5wD408otLFznnrtK5=QhVpwCxVFrZ6TeKT9moRrVoOxG!drHBuJrRI7bCxCkJyPej=DQ9z-gPaoNl-NwL/wiarTD18Sv7Kse!0Pmxg?TqkERYdmi?5fZPF=RJE-4cjebFO0B1G6dt?X2NQR-cH0-33FriJptOuuKe84UAx8ol-zcJVAVEfJq?106gbq=pMEBD7x1bAl/8S?GiOuLSz49JDX5dm5W=8XABCSPQGT525=kq?=k9ZNCVNPI/Gq12k?/allaWtqr5XSOTGfwtqnl/aP43?4Vonc0/6xLAm90R46h!TZaEdXF7BuNcPxq/xsFTNaWsIKEtqIe1I=6Lo88TX5pPti2WF4l749ZTR-DQX/Td?pASn5iVgldOsJ67n5yiaUHO5oq2utdydg!cXXzBGX5=!5rgJC-j-bCv0C6iVg!CxLvpT6P-L=8hVt-E-cSJaL9a8sbOR=Z6DyaEq/=vnw2z2F5wIq=SFqiIorSQahK45lyFvkRATfa1efQz95Nc6E/hmr-?GIT6VaXdFujo1ewuyM8xSdF9o-kzS2j0Lpu89ajbN5wXnTaA0Co0Fx87E6iqQ?rMtsfX9LlxMvwZdjLA=5t26foz3tzAehuhcZjiDuRmDvAYO=IQrWW?1=t!oCZhvYyGR2TCA-u4ldm58lH=WRiDVjLM4q4PDSFRt0Y9007urnBhpcD!O7zFLPnTIc9tH7QVSpHtYyoc6hykdpOxjjKE0dtFjNxpBa=q?SOpy0JQwh82?OGXBPjMzbBp2CYs7c2Ucmd490KwPdp-fGgH=MoGLCc3fM0rUvXMB4hhRK6JiQR1iSQbikND48-X=t9p3KOhfVgoVvvwqTZI7v5679krY318uLgR4ZWGASdrCcNalm4o5kFMh0o1HY6FNyTCiN5oLP3rRZq?fJi5VWNsACLlEluDsSf4SAz9n!d!HXL6dQ2i?cAQ4MScjBs!wRFrkb6E01Jmp5Vjh1c/X-wRWXQxW-?lrf1-HLDndvMuYDGGSuF2CC1/TLDyPYrfND?8eF?diDk=k2YWsBDSjAxzDgM?oayQf6FjVZviE-LiWZ9Cb6nRDWA!evx7WETI251iouzhx0s4=e4fnb!4fIP52pgZAKilvrVIF3ybzV9AUY6kgUt3ecZQAB31n-q0IEp2DLDdB-xFhi3q3PK=yccSSa-E8U1N5nEJRhg9=H8QHiAHmmT!LP3Ppo5UjNQvdgt1/RiTuj1uW5dhWy73pRZuHKD0kxklwx7k=3O4guM53=sueHpFcB74RQeC03R?s9Lm2pdv5dkeL7ziTD793TNJMjkK7pobZIUKJeqFUZViOCkv-yDKFE7-sTWQuwaaejbYtGpR-dyh/uUERFe3HASKMphV4fZQ0MlVxz0BxHhhl5f8hpy4ssPtabYOfkZfLmaGWciToDZ-gSia7TmZ!qurjVum/c79iGXv-DLErwoQ=UxtI?2!8ZtsW5v9mZ1so1ZSFZkCttBFvJYtPjG?hpglF3cS5-Z4RGwi7U-0EjXQRH3avFrmuFBHZ2K7InCOQsAYETSEag-eznO!4FiQ6/qaO9ZON5EK4Hz=CPnHlagy0!Uu0?Sud9b9BFNkFu8/!m4MPe7a-9krvF1s?cFHiIU94Zk2JdlhFlQxcheqNvmxV3qjuvm3IjVD";

// Verificar si el token existe
if ($token !== $key) {
    http_response_code(401);
    echo "Missing or invalid token.\n";
    exit;
}

$comando = '/usr/local/bin/php ' . __DIR__ . '/cron.php';
$output = [];
$return_var = 0;

// Ejecuta el comando y captura la salida y el código de retorno
exec($comando, $output, $return_var);

// Muestra la salida y el resultado
if ($return_var === 0) {
    echo "Comando ejecutado exitosamente.\n";
    echo "Salida:\n" . implode("\n", $output);
} else {
    echo "Error al ejecutar el comando. Código de retorno: $return_var\n";
}


// require './cron.php';
