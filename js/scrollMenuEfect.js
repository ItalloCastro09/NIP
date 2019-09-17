const elements = document.querySelectorAll("[data-color]");
const line = document.querySelector(".line");
const background = document.querySelector(".header");

addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    elements.forEach(elment => {
      elment.style.color = "white";
      line.style.background = "white";
      background.style.background = "black";
    });
  } else {
    elements.forEach(elment => {
      elment.style.color = "black";
      line.style.background = "black";
      background.style.background = "white";
    });
  }
});
