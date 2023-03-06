const ua=detect.parse(navigator.userAgent)
const button=document.querySelector(".download")

console.log(ua.browser)
console.log(ua.device)
if(ua.device !== null){
    if(ua.device.family === 'iPhone'){
        button.href= 'https://itunes.apple.com/kh/app/bidc-mobile-banking-cambodia/id1056453667';
    }else if(ua.device.family === 'Android'){
        button.href= 'https://play.google.com/store/apps/details?id=com.campopay.bidc&amp;hl=en';
    }else {
        button.href='https://www.bidc.com.kh/';
    }
}