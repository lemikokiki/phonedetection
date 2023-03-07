<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'iPhone') !== false) {
    $url='https://apps.apple.com/kh/app/bidc-mobile-banking-cambodia/id1056453667';
    header('Location: '.$url);
} elseif (strpos($user_agent, 'Android') !== false) {
    $url = 'https://play.google.com/store/apps/details?id=com.campopay.bidc&amp;hl=en';
    header('Location: '.$url);
} else {
    $url = 'https://www.bidc.com.kh/';
    header('Location: '.$url);
}
?>