let btns = document.querySelectorAll(".btnDelete");
let btnSubmit = document.querySelector(".form-submit");

btns.forEach((btn) => {
    const id = btn.dataset.id;
    btn.addEventListener("click", (e) => {
        const confirm = window.confirm("Ban co muon xoa khong?");
        if (confirm) {
            window.open(`./?act=deleteOne&id=${id}`, "_self");
        }
    });
});

btnSubmit.addEventListener("click", () => {
    let inputName = document.querySelector("#categoryName").value;
    let inputDesc = document.querySelector("#description").value;
    const message = document.querySelectorAll(".form-control");
    const parentMessage = message.parentElement;
    if (inputName !== "" && inputDesc !== "") {
        message.forEach((m) => {
            if (message.classList.contains("invalid") && parentMessage.classList.contains("invalid")) {
                parentMessage.classList.remove("invalid");
                message.classList.remove("invalid");
                message.textContent = "";
                window.open("./?act=createCategory");
            }
        });
    } else {
        const message = btnSubmit.parentElement.querySelector(".form-message");
        const parentMessage = message.parentElement;
        parentMessage.classList.add("invalid");
        message.classList.add("invalid");
        message.textContent = "Vui lòng nhập tên danh mục";
    }
});
