let btns = document.querySelectorAll(".btnDelete");

btns.forEach((btn) => {
    console.log(btn);
    const id = btn.dataset.id;
    console.log(id);
    btn.addEventListener("click", (e) => {
        const confirm = window.confirm("Ban co muon xoa khong?");
        if (confirm) {
        }
    });
});
