const delivery = document.querySelectorAll("[name *= payment-method]");
delivery.forEach((ev) => {
    ev.parentElement.addEventListener("click", () => {
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

            default:
                break;
        }
        console.log(form.getAttribute("action"));
    });
});
