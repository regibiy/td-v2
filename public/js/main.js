const currentURL = window.location.pathname;
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((element) => {
  if (element.getAttribute("href") == currentURL) {
    console.log("test");
  }
});
