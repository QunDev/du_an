let btn = document.querySelectorAll(".btnDelete");
console.log(btn);

btn.addEventListener("click", () => {
    let confirm = document.querySelector("#deleteConfirm");
    confirm.classList.toggle("hide");
});
