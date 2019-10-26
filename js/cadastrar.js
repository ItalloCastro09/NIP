const form = document.querySelectorAll("[data-form]");
const message = document.querySelectorAll(".message");

console.log(message);

form.forEach(el => {
  el.addEventListener("submit", async function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    const get = await fetch(`/controller/${this.dataset.form}.php`, {
      method: "POST",
      body: formData
    });

    if (get.status == 202) {
      window.location.assign("/index.php");
    }
    const result = await get.json();
    console.log(result);

    message.forEach(el => (el.innerText = result.message));
  });
});
