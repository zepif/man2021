const form = document.querySelector(".typing-area"), inputField = form.querySelector(".input-field"),
      sendBtn = form.querySelector("button");

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if (data == "success") {
                    location.href = "";
                }
            }
        }
    } let formData = new FormData(form);
    xhr.send(formData);
}
