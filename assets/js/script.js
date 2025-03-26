document.addEventListener("DOMContentLoaded",
    function (event) {

        var isAds = getCookie('ads')
        if (!isAds) {
            var ads = document.getElementsByClassName('ads')[0]
            ads.style.display = 'block'

            ads.addEventListener('click', function () {
                setCookie('ads', true, 7)
                ads.style.display = 'none'
            })
        }
        var isCookieDEl = getCookie('cookieDEl')
        if (!isCookieDEl) {
            var cookieDEl = document.getElementsByClassName('cookieDEl')[0]
            cookieDEl.addEventListener('click', function () {
                deleteCookie('ads')
            })
        }
    })