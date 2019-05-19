<?php
function all4site_upload_allow_types($mimes)
{
    // разрешаем новые типы
    $mimes['svg'] = 'image/svg+xml';
    // $mimes['doc'] = 'application/msword';
    // $mimes['woff'] = 'font/woff';
    // $mimes['psd'] = 'image/vnd.adobe.photoshop';
    // $mimes['djv'] = 'image/vnd.djvu';
    // $mimes['djvu'] = 'image/vnd.djvu';

    // отключаем имеющиеся
    // unset( $mimes['mp4a'] );

    return $mimes;
}

?>