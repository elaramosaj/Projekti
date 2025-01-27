document.addEventListener("DOMContentLoaded", function() {
    var cookieConsent = document.getElementById("cookieConsent");
    var cookiesAccepted = localStorage.getItem("cookiesAccepted");

    if (!cookiesAccepted) {
        cookieConsent.style.display = "block";
    }
});

function acceptCookies() {
    localStorage.setItem("cookiesAccepted", "true");
    document.getElementById("cookieConsent").style.display = "none";
}

function declineCookies() {
    document.getElementById("cookieConsent").style.display = "none";
}
