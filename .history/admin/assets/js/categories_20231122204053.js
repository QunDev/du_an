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

let selector = document.querySelector(e);
let parentSelector = selector.parentSelector;
console.log(parentSelector.classList.length);

function checkNull(e) {
    let selector = document.querySelector(e);
    let parentSelector = selector.parentSelector;
    console.log(parentSelector.classList.length);
    if (selector.value !== "") {
        if (parentSelector.classList.length) {
        }
    }
}

btnSubmit.addEventListener("click", () => {});
