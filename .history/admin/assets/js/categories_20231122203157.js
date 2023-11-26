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

function checkNull(e) {
    let value = document.querySelector(e).value;
    if (value !== "") return true;
}
