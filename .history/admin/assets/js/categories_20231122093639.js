let btn = document.querySelectorAll(".btnDelete");

btn.addEventListener("click", () => {
    let confirm = document.querySelector("#deleteConfirm");
    confirm.classList.toggle("hide");
});
