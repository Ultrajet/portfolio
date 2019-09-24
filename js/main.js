const small = document.querySelector("small");
const html = document.querySelector("html");
const codepen = document.querySelector("img[alt='codepen']");
const github = document.querySelector("img[alt='github']");

small.addEventListener("click", function () {
    small.textContent = html.classList == "mode-nuit" ? "➡️ Mode nuit" : "➡️ Mode jour";
    html.classList.toggle("mode-nuit");
    codepen.setAttribute('src', html.classList == "mode-nuit" ? 'assets/codepen-light.png' : 'assets/codepen-dark.png');
    github.setAttribute('src', html.classList == "mode-nuit" ? 'assets/github-light.png' : 'assets/github-dark.png');
})