// let btns = document.querySelectorAll(".btnDelete");
// let btnSubmit = document.querySelector(".form-submit");
// let btnUpdate = document.querySelector(".form-update");

// btns.forEach((btn) => {
//     const id = btn.dataset.id;
//     btn.addEventListener("click", (e) => {
//         const confirm = window.confirm("Ban co muon xoa khong?");
//         if (confirm) {
//             window.open(`./?act=deleteOneProduct&id=${id}`, "_self");
//         }
//     });
// });

// function isSuccess(e) {
//     let parentSelector = document.querySelector(e).parentElement;
//     let length = parentSelector.classList.length;
//     let message = parentSelector.querySelector(".form-message");
//     if (length !== 1 && parentSelector.classList.contains("invalid")) {
//         parentSelector.classList.remove("invalid");
//         message.classList.remove("invalid");
//         message.textContent = "";
//         let value = document.querySelector(e).value;
//         return value;
//     } else {
//         message.textContent = "";
//         let value = document.querySelector(e).value;
//         return value;
//     }
// }

// function isValid(e) {
//     let parentSelector = document.querySelector(e).parentElement;
//     let message = parentSelector.querySelector(".form-message");
//     parentSelector.classList.add("invalid");
//     message.classList.add("invalid");
//     parentSelector.querySelector(".form-message").textContent = "Enter an values";
// }

// function checkNull(e) {
//     let selector = document.querySelector(e);
//     if (selector.value !== "") {
//         return isSuccess(e);
//     } else {
//         isValid(e);
//         return false;
//     }
// }

// btnSubmit.addEventListener("click", () => {
//     let valueName = checkNull("#categoryName");
//     let valueDesc = checkNull("#description");
//     console.log(valueName);
//     console.log(valueDesc);
//     let isConfirm = window.confirm(`Confirm the creation of a new category ${valueName}`);
//     if (isConfirm) {
//         if (typeof valueName === "string" && typeof valueDesc === "string") {
//             window.open(`./?act=createCategory&name=${valueName}&desc=${valueDesc}`, "_self");
//         }
//     }
// });

// btnUpdate.addEventListener("click", () => {
//     let valueName = checkNull("#categoryName");
//     let valueDesc = checkNull("#description");
//     let isConfirm = window.confirm(`Confirm update of a new category ${valueName}`);
//     if (isConfirm) {
//         if (typeof valueName === "string" && typeof valueDesc === "string") {
//             window.open(`./?act=update&id=${btnUpdate.dataset.id}&name=${valueName}&desc=${valueDesc}`, "_self");
//         }
//     }
// });

const validator = function (form) {
    class Rules {
        constructor(name, rules) {
            this[name] = rules;
        }

        getRule(formSelect, message = "") {
            let name = "";
            for (const x in this) {
                name = x;
            }
            let getValue = formSelect.querySelector(`#${name}`).value;
            const formInvalid = message.parentElement;
            class Message {
                constructor(status, message) {
                    (this.status = status), (this.message = message);
                }

                setSuccess() {
                    formInvalid.classList.forEach((nameClass) => {
                        if (nameClass === "invalid") {
                            formInvalid.classList.remove("invalid");
                        } else {
                            message.classList.add("success");
                        }
                    });
                }

                setInvalid() {
                    formInvalid.classList.add("invalid");
                }
            }
            const arrMessage = [];
            if (this[name].includes("|email")) {
                if (this.emailCheck(getValue)) {
                    const success = new Message("success", "");
                    arrMessage.push({
                        status: success,
                        message: success.message,
                    });
                } else {
                    const invalid = new Message("invalid", "Email không đúng định dạng");
                    arrMessage.push({
                        status: invalid,
                        message: invalid.message,
                    });
                }
            }
            if (this[name].includes("|min:") || this[name].includes("|max:")) {
                const number = this[name].slice(this[name].indexOf(":") + 1);
                const math = this[name].slice(this[name].indexOf("|") + 1, this[name].indexOf(":"));
                if (this.passwordCheck(number, getValue, math)) {
                    const valid = new Message("success", "");
                    arrMessage.push({
                        status: valid,
                        message: valid.message,
                    });
                } else {
                    const invalid = new Message("invalid", "Invalid password");
                    arrMessage.push({
                        status: invalid,
                        message: invalid.message,
                    });
                }
            }
            if (this[name].includes("|confirm")) {
                const passwordHidden = formSelect.querySelector("[name=password]").value;
                console.log(passwordHidden);
                if (passwordHidden == "") {
                    const invalid = new Message("invalid", "Please enter your password first");
                    arrMessage.push({
                        status: invalid,
                        message: invalid.message,
                    });
                } else {
                    if (this.passwordConfirm(getValue, passwordHidden)) {
                        const success = new Message("success", "");
                        arrMessage.push({
                            status: success,
                            message: success.message,
                        });
                    } else {
                        const invalid = new Message("invalid", "Confirmation passwords are not the same");
                        arrMessage.push({
                            status: invalid,
                            message: invalid.message,
                        });
                    }
                }
            }
            if (this[name].includes("required")) {
                if (this.required(getValue)) {
                    const success = new Message("success", "");
                    arrMessage.unshift({
                        status: success,
                        message: success.message,
                    });
                } else {
                    const invalid = new Message("invalid", "Vui lòng nhập trường này");
                    arrMessage.unshift({
                        status: invalid,
                        message: invalid.message,
                    });
                }
            }

            if (getValue == "") {
                this.colorMessage(arrMessage[0]);
                return arrMessage[0].message;
            } else {
                this.colorMessage(arrMessage[arrMessage.length - 1]);
                return arrMessage[arrMessage.length - 1].message;
            }
        }

        required(value) {
            return value.trim() !== "" ? true : false;
        }

        emailCheck(value) {
            const regexEmail =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regexEmail.test(value);
        }

        passwordCheck(number, value, math) {
            if (math == "min") {
                return value.length >= number ? true : false;
            } else {
                return value.length <= number ? true : false;
            }
        }

        passwordConfirm(value, passwordOld) {
            return passwordOld == value ? true : false;
        }

        colorMessage(value) {
            if (value.status.status == "success") {
                value.status.setSuccess();
            } else {
                value.status.setInvalid();
            }
        }
    }
    if (form !== "") {
        const formSelect = document.querySelector(form);
        const inputTag = formSelect.querySelectorAll("[rule*=required]");
        const btnSubmit = document.querySelector(".form-submit");
        if (typeof inputTag === "object") {
            inputTag.forEach((e) => {
                let nameRule = new Rules(e.name, e.getAttribute("rule"));
                let inputSelect = formSelect.querySelector(`#${e.name}`);
                try {
                    inputSelect.addEventListener("change", () => {
                        const message = e.parentElement.querySelector(".form-message");
                        let check = nameRule.getRule(formSelect, message);
                        message.innerHTML = check;
                    });
                } catch (err) {
                    console.log(err);
                }
            });
            btnSubmit.addEventListener("click", () => {
                inputTag.forEach((e) => {
                    let nameRule = new Rules(e.name, e.getAttribute("rule"));
                    let inputSelect = formSelect.querySelector(`#${e.name}`);
                    const message = e.parentElement.querySelector(".form-message");
                    let check = nameRule.getRule(formSelect, message);
                    message.innerHTML = check;
                });
                const arrFormGroup = document.querySelectorAll(".form-group");
                console.log(arrFormGroup);
                let checkValid = -1;
                arrFormGroup.forEach((e) => {
                    if (!e.classList.contains("invalid")) {
                        checkValid++;
                    }
                });
                let url = "./?act=createCategory&";
                let arr = [];
                if (checkValid !== 0) {
                    for (let i = 0; i < inputTag.length; i++) {
                        arr.push(e.name);
                        if (e.name === "image") {
                            url += `image=${e.files[0].name}`;
                        } else {
                            url += `${e.name}=${e.value}&`;
                        }
                    }
                    inputTag.forEach((e) => {});

                    window.open(url, "_blank");
                }
                console.log(url);
                console.log(arr);
                const inputImg = document.querySelector("#image");
                if (inputImg.value !== "") {
                    const fileName = inputImg.files[0].name;
                    console.log(fileName);
                }
            });
        }
    }
};
