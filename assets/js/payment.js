const delivery = document.querySelectorAll("[name *= payment-method]");
const btn = document.querySelector("#btn-payment");
let check = 0;
delivery.forEach((ev) => {
    btn.addEventListener("click", (i) => {
        if (check > 0) {
        } else {
            i.preventDefault();
            alert("Vui lòng chọn phương thức thanh toán");
        }
    });
    ev.parentElement.addEventListener("click", () => {
        check++;
        const form = document.querySelector("#form-submit");
        const address = form.querySelector("[name*=address").value;
        switch (ev.getAttribute("data-paymentMethod")) {
            case "cash":
                form.setAttribute("action", `./?act=buySuccess&paymentMethod=cash&address=${address}`);
                form.setAttribute("target", "_self");
                break;
            case "momo":
                form.setAttribute("action", "./view/handle_payment.php");
                break;
        }
    });
});
