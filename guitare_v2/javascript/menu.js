const add_btn = document.querySelector(".add_something");
const btn_ajout = document.querySelector(".bouton_ajout");
const edit_btn = document.querySelector(".edit_something");
const edit_ajout = document.querySelector(".edit_ajout");

add_btn.addEventListener("click", () => {
  add_btn.classList.toggle("active");
  btn_ajout.classList.toggle("active");
});

edit_btn.addEventListener("click", () => {
  edit_btn.classList.toggle("active");
  edit_ajout.classList.toggle("active");
});
