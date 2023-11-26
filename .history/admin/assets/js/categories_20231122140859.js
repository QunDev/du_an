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
    let inputValues = document.querySelector("#categoryName").value;
    const message = btnSubmit.parentElement.querySelector(".form-message");
        const parentMessage = message.parentElement;
    if (inputValues !== "") {
        if()
    } else {
        const message = btnSubmit.parentElement.querySelector(".form-message");
        const parentMessage = message.parentElement;
        parentMessage.classList.add("invalid");
        message.classList.add("invalid");
        message.textContent = "Vui lòng nhập tên danh mục";
    }
});