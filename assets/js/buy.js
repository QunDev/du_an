let btn = document.querySelector("#update-address");
let btnName = document.querySelector("#update-name");
let btnPhone = document.querySelector("#update-phone");
btn.addEventListener("click", () => {
    let value = document.querySelector(".update-input").value;
    if (value !== "") {
        window.open(`./?act=updateAddress&address=${value}&id=${btn.getAttribute("data-idShip")}`, "_self");
    } else {
        let notification = document.querySelector(".error");
        notification.textContent = "Không được để trống";
    }
});

btnName.addEventListener("click", () => {
    let value = document.querySelector(".update-name").value;
    if (value !== "") {
        window.open(`./?act=updateName&name=${value}&id=${btn.getAttribute("data-idShip")}`, "_self");
    } else {
        let notification = document.querySelector(".error");
        notification.textContent = "Không được để trống";
    }
});

btnPhone.addEventListener("click", () => {
    let value = document.querySelector(".update-phone").value;
    if (value !== "") {
        window.open(`./?act=updatePhone&phone=${value}&id=${btn.getAttribute("data-idShip")}`, "_self");
    } else {
        let notification = document.querySelector(".error");
        notification.textContent = "Không được để trống";
    }
});

const complete = document.querySelector("#dataComplete");
const btnCmt = document.querySelector("#btn-cmt");
const btnCmtCreate = document.querySelector("#cmt-btn");
const btnUpdate = document.querySelectorAll("#btn-update");
let idcp = complete.dataset.idcp;
btnUpdate.forEach((i) => {
    switch (idcp) {
        case "2":
            i.classList.add("btnHidden");
            break;
        case "3":
            i.classList.add("btnHidden");
            btnCmt.parentElement.parentElement.classList.remove("btnHidden");
            break;
        case "4":
            i.classList.add("btnHidden");
            break;
        default:
            break;
    }
});

btnCmtCreate.addEventListener("click", () => {
    let value = document.querySelector(".cmt-input").value;
    let valueStar = document.querySelector("#star").value;
    let valueP = document.querySelector("#idP").value;
    if (value !== "") {
        window.open(`./?act=cmt&value=${value}&star=${valueStar}&idProduct=${valueP}`, "_blank");
    }
});
