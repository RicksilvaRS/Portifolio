let rickMenu = document.getElementById("rick-menu");
let menu = document.getElementById("menu-mobile");
let overlay = document.getElementById("overlay-menu");

rickMenu.addEventListener("click", () => {
  menu.classList.add("abrir-menu");
});

menu.addEventListener("click", () => {
  menu.classList.remove("abrir-menu");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("abrir-menu");
});

document
  .getElementById("rick-enviar")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert("enviado!");
  });
