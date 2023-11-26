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

function isSuccess() {
    let selector = document.querySelector(".form-control");
    let parentSelector = selector.parentElement;
    let length = parentSelector.classList.length;
    if (length !== 1 && parentSelector.classList.contains("invalid")) {
        parentSelector.classList.remove("invalid");
        parentSelector.querySelector(".form-message").textContent = "";
    }
}

function checkNull(e) {
    let selector = document.querySelector(e);
    if (selector.value !== "") {
    }
}

btnSubmit.addEventListener("click", () => {});
