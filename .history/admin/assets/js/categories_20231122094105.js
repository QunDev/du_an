let btns = document.querySelectorAll(".btnDelete");

btns.forEach((btn) => {
    console.log(btn);
    btn.addEventListener("click", (e) => {
        console.log("1");
        const confirm = window.confirm("Ban co muon xoa khong?");
        if (confirm) {
        }
    });
});
