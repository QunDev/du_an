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
    let parentSelector = document.querySelector(e).parentElement;
    let length = parentSelector.classList.length;
    let message = parentSelector.querySelector(".form-message");
    if (length !== 1 && parentSelector.classList.contains("invalid")) {
        parentSelector.classList.remove("invalid");
        message.classList.remove("invalid");
        message.textContent = "";
        let value = document.querySelector(e).value;
        return value;
    } else {
        message.textContent = "";
        let value = document.querySelector(e).value;
        return value;
    }
}

function isValid(e) {
    let parentSelector = document.querySelector(e).parentElement;
    let message = parentSelector.querySelector(".form-message");
    parentSelector.classList.add("invalid");
    message.classList.add("invalid");
    parentSelector.querySelector(".form-message").textContent = "Enter an values";
}

function checkNull(e) {
    let selector = document.querySelector(e);
    if (selector.value !== "") {
        return isSuccess(e);
    } else {
        isValid(e);
        return false;
    }
}

btnSubmit.addEventListener("click", () => {
    let valueName = checkNull("#categoryName");
    let valueDesc = checkNull("#description");

    if (typeof valueName === "string" && typeof valueDesc === "string") {
        window.open(`./?act=createCategory&name=${valueName}&desc=${valueDesc}`, "_self");
    }
});
