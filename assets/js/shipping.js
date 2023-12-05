const btn = document.querySelector("#shippingAddress");
const next = document.querySelector("#nextURL");
const input = document.querySelectorAll("#shipping-adress");
let address = "";

btn.addEventListener("click", () => {
    const valueName = document.querySelector("#name").value;
    const valuePhone = document.querySelector("#phone").value;
    const valueAddress = document.querySelector("#address").value;
    window.open(
        `./?act=addAddress&id=${btn.dataset.id}&name=${valueName}&phone=${valuePhone}&address=${valueAddress}`,
        "_self"
    );
});

input.forEach((e) => {
    e.addEventListener("click", () => {
        address = e.dataset.idaddress;
        next.setAttribute("href", `./?act=payment&id=${address}`);
    });
});
