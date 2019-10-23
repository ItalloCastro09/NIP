const form = document.querySelectorAll("[data-form]");
const message = document.querySelector(".message");

console.log(form);

form.forEach(el => {
  el.addEventListener("submit", async function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    const get = await fetch(`/controller/${this.dataset.form}.php`, {
      method: "POST",
      body: formData
    });

    if (get.status == 202) {
      window.location.reload();
    }
    console.log(get);
    const result = await get.json();

    message.innerText = result.message;
  });
});
