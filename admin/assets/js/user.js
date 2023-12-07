let select = document.querySelectorAll("#roleSelect");
let btn = document.querySelectorAll(".btn");

select.forEach((i) => {
    let valueOld = i.value;

    i.addEventListener("change", () => {
        window.open(`./?act=updateRole&id=${i.dataset.id}&idRole=${i.value}`, "_self");
    });
});

btn.forEach((e) => {
    e.addEventListener("click", () => {
        window.open(`./?act=deleteUser&id=${e.dataset.id}`, "_self");
    });
});
