let select = document.querySelectorAll("#status");

select.forEach((i) => {
    let valueOld = i.value;
    console.log();

    if (valueOld === "2") {
        i.document.querySelector("[value*=2]").setAttribute("hidden", "hidden");
    }

    i.addEventListener("change", () => {
        window.open(`./?act=updateStatus&id=${i.dataset.id}&idStatus=${i.value}`);
    });
});
