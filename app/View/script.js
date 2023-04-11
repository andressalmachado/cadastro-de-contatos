const handlePhone = (event) => {
  let input = event.target;
  input.value = phoneMask(input.value);
};

const phoneMask = (value) => {
  if (!value) return "";
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d{2})(\d)/, "($1) $2");
  value = value.replace(/(\d)(\d{4})$/, "$1-$2");
  return value;
};

const whatsappCheckbox = document.querySelector("#checkWhatsapp");
const emailCheckbox = document.querySelector("#checkEmail");
const smsCheckbox = document.querySelector("#checkSms");

whatsappCheckbox.addEventListener("change", () => {
  whatsappCheckbox.checked
    ? (whatsappCheckbox.value = 1)
    : (whatsappCheckbox.value = 0);
});

emailCheckbox.addEventListener("change", () => {
  emailCheckbox.checked ? (emailCheckbox.value = 1) : (emailCheckbox.value = 0);
});

smsCheckbox.addEventListener("change", () => {
  smsCheckbox.checked ? (smsCheckbox.value = 1) : (smsCheckbox.value = 0);
});

if (whatsappCheckbox.value == "1") {
  whatsappCheckbox.checked = true;
}
if (emailCheckbox.value == "1") {
  emailCheckbox.checked = true;
}
if (smsCheckbox.value == "1") {
  smsCheckbox.checked = true;
}
