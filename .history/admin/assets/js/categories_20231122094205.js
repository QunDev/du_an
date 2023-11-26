let btns = document.querySelectorAll(".btnDelete");

btns.forEach((btn) => {
    console.log(btn);
    const id = btn.dataset.id;
    btn.addEventListener("click", (e) => {
        console.log(id);
        const confirm = window.confirm("Ban co muon xoa khong?");
        if (confirm) {
        }
    });
});
