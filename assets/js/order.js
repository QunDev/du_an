const prevArr = document.querySelectorAll("#prev");
const nextArr = document.querySelectorAll("#next");
const deleteProduct = document.querySelector("#delete");
const nextURL = document.querySelector("#nextURL");
// function isFalse(n) {
//     if (n === "0") {
//         alert("Min = 0");
//         return false;
//     }
//     return true;
// }
// prevArr.forEach((prev) => {
//     const quantity = prev.parentElement.querySelector("span");
//     prev.addEventListener("click", () => {
//         let tG = quantity.innerHTML;
//         if (isFalse(quantity.innerHTML)) {
//             quantity.innerHTML = tG - 1;
//         }
//     });
// });
// nextArr.forEach((next) => {
//     const quantity = next.parentElement.querySelector("span");
//     next.addEventListener("click", () => {
//         let tG = quantity.innerHTML;
//         quantity.innerHTML = Number(tG) + 1;
//     });
// });

prevArr.forEach((prev) => {
    prev.addEventListener("click", () => {
        const quantity = prev.parentElement.querySelector("span");
        if (Number(quantity.dataset.quantity) !== 1) {
            console.log(1);
            if (Number(quantity.dataset.quantity) === 2) {
                console.log(2);
                prev.classList.add("js-toggle");
            }
            window.open(`./?act=prev&quantity=${quantity.dataset.quantity - 1}&id=${quantity.dataset.id}`, "_self");
        } else {
        }
    });
});

nextArr.forEach((next) => {
    next.addEventListener("click", () => {
        const quantity = next.parentElement.querySelector("span");
        window.open(`./?act=next&quantity=${Number(quantity.dataset.quantity) + 1}&id=${quantity.dataset.id}`, "_self");
    });
});

deleteProduct.addEventListener("click", () => {
    const quantity = document.querySelector("#important");
    window.open(`./?act=deleteOrder&id=${quantity.dataset.id}`, "_self");
});

nextURL.addEventListener("click", (e) => {
    if (nextURL.dataset.count == 0) {
        e.preventDefault();
    } else {
        window.open("./?act=shipping", "_self");
    }
});
