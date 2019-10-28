const form = document.querySelectorAll("[data-form]");
const file = document.querySelector(".file");

const clientId = "e35e33314640b51";

const imageForm = new FormData();

form.forEach(el => {
  el.addEventListener("submit", async function(event) {
    event.preventDefault();

    imageForm.append("image", file.files[0]);

    const getImgur = await fetch("https://api.imgur.com/3/image", {
      method: "POST",
      body: imageForm,
      headers: {
        Authorization: `Client-ID ${clientId}`
      }
    });


    const result = await getImgur.json();

    console.log(result);

    const formData = new FormData(this);
    console.log(result.data.link);
    formData.append("imageUrl", result.data.link);

    const postUser = await fetch("/controller/addLivro.php", {
      method: "POST",
      body: formData
    });
  });
});
