let btn = document.querySelector("#btnDelete");

btn.addEventListener("click", () => {
    let confirm = document.querySelector("#deleteConfirm");
    confirm.setAttribute("display", "block");
});
