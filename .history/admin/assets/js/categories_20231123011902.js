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

function isSuccess(e) {
    let parentSelector = e.parentElement;
    let length = parentSelector.classList.length;
    let message = parentSelector.querySelector(".form-message");
    if (length !== 1 && parentSelector.classList.contains("invalid")) {
        parentSelector.classList.remove("invalid");
        message.classList.remove("invalid");
        message.textContent = "";
    }
}

function isValid(e) {
    let parentSelector = e.parentElement;
    let length = parentSelector.classList.length;
    let message = parentSelector.querySelector(".form-message");
    parentSelector.classList.add("invalid");
    message.classList.add("invalid");
    parentSelector.querySelector(".form-message").textContent = "Enter an values";
}

function checkNull(e) {
    let selector = document.querySelector(e);
    if (selector.value !== "") {
        isSuccess(e);
        return true;
    } else {
        isValid(e);
        return false;
    }
}

btnSubmit.addEventListener("click", () => {
    if()
});