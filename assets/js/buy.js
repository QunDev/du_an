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

console.log();
