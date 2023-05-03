const toggleButton = document.getElementById("btn-menu");
const navWrapper = document.getElementById("div-menu");

const toggle = document.getElementById("btn-menu-footer");
const nav = document.getElementById("div-menu-footer");

toggleButton.addEventListener("click", () => {
  navWrapper.classList.toggle("show");
});

toggle.addEventListener("click", () => {
  nav.classList.toggle("show");
  console.log("erros");
});
