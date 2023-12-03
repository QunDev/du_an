const delivery = document.querySelectorAll("[name *= payment-method]");
delivery.forEach((ev) => {
    ev.parentElement.addEventListener("click", () => {
        const form = document.querySelector("#form-submit");
        console.log(ev.getAttribute("data-paymentMethod"));
        switch (ev.getAttribute("data-paymentMethod")) {
            case "cash":
                form.setAttribute("action", `./?act=buySuccess`);
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
