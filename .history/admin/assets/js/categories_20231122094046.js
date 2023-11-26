let btns = document.querySelectorAll(".btnDelete");

btns.forEach((btn) => {
    console.log(btn);
    btn.addEventListener("click", (e) => {
        const confirm = window.confirm("Ban co muon xoa khong?");
        if (confirm) {
            console.log("1");
        }
    });
});
