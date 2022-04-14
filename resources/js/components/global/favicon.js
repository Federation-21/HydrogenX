// Favicon Controller
matcher = window.matchMedia('(prefers-color-scheme: dark)');
var linkHref= document.querySelector("#icon");
var lightIcon = "./assets/images/favicon/favicon-light.ico";
var darkIcon = "./assets/images/favicon/favicon-dark.ico";
if (matcher.matches) {
    linkHref.setAttribute("href", darkIcon);
} else {
    linkHref.setAttribute("href", lightIcon);
}
