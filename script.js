// Set nav underlinings:
window.addEventListener("DOMContentLoaded", () => {
    let activePage = window.location.pathname;
    console.log(retrivePathName(activePage));
    activePage = retrivePathName(activePage);
    document.querySelectorAll(".navlink").forEach((link) => {
        if (link.href === window.location.href) {
            console.log(window.location.ref);
            link.classList.add("isactive");
        }
    });
});

function retrivePathName(path) {
    const longUrl = "/Users/rehaananjariaagain1/Library/Mobile%20Documents/com~apple~CloudDocs/Desktop/kinochronika_web/homedir/public_html/";
    const length = longUrl.length;
    return path.substring(length);
}