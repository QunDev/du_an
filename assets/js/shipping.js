const btn = document.querySelector("#shippingAddress");
const next = document.querySelector("#nextURL");
const input = document.querySelectorAll("#shipping-adress");

btn.addEventListener("click", () => {
    const valueName = document.querySelector("#name").value;
    const valuePhone = document.querySelector("#phone").value;
    const valueAddress = document.querySelector("#address").value;
    window.open(
        `./?act=addAddress&id=${btn.dataset.id}&name=${valueName}&phone=${valuePhone}&address=${valueAddress}`,
        "_self"
    );
});

let check = 0;
let address = "";
input.forEach((i) => {
    next.addEventListener("click", (e) => {
        if (check > 0) {
            next.setAttribute("href", `./?act=payment&id=${address}`);
        } else {
            e.preventDefault();
            alert("Vui lòng chọn địa chỉ.");
        }
    });
    i.addEventListener("click", () => {
        check++;
        address = i.dataset.idaddress;
    });

    // e.addEventListener("click", () => {});
});
