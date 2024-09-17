// Toggle Class active
const navbarNav = document.querySelector(".navbar-nav");
//ketika hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik DIluar side bar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.constains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
// Setelah menampilkan pop-up login berhasil
displayPopup("Login berhasil!");

// Lakukan pengalihan ke index.html setelah beberapa detik (misalnya, 2 detik)
setTimeout(function() {
  window.location.href = "index.html";
}, 2000); // Pengalihan setelah 2 detik (2000 milidetik)
