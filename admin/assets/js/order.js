let select = document.querySelectorAll("#status");

select.forEach((i) => {
    let valueOld = i.value;
    console.log(valueOld);

    i.addEventListener("change", () => {
        if (valueOld > "2") {
            alert("Đơn hàng này đã kết thúc không thể thay đổi trạng thái");
        } else {
            window.open(`./?act=updateStatus&id=${i.dataset.id}&idStatus=${i.value}`, "_self");
        }
    });
});
