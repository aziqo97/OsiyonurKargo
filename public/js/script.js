theUrl = "https://tez-tez.uz/check-code/"
var btn = document.querySelector("#send__btn")
var reset_btn1 = document.querySelector("#reset__btn1")
var reset_btn2 = document.querySelector("#reset__btn2")

var b = document.querySelector(".date")
var p = document.querySelector(".error_p")
var h1 = document.querySelector(".error_h1")
var h2 = document.querySelector(".success_h2")
var p2 = document.querySelector(".succes_p")
var sp = document.querySelector(".success_provider")
var shtrix = document.querySelector("#shtrix");
var home = document.getElementById("home");

// kelmagan yoki kod notogri terigan
const h1_text = "Buyurtma hali omborga etib kelmagan"
// shtix kod beckendniki
const shCode = "12345"
// kelgan sanasi
const date = "11.01.2023"

btn.onclick = function checkCode() {
  $.get(`${theUrl}?code=${shtrix.value}`, function(data, status){
    if (data['success'] == true) {
      codeSucces(data['data'])
    }
    else {
        if (data['success'] == false) {
          codeError()
        }
        if (shtrix.value === "") {
          codeEmpty()
        }
      }
  })
}
reset_btn1.onclick = () => resetAll()
reset_btn2.onclick = () => resetAll()

function codeSucces(code, status) {
  home.classList.remove("code_error")
  home.classList.add("code_succes")

  if (code['action'] == 1) {
    sp.textContent = ` `
    h2.textContent = "Buyurtmangiz omborga qabul qilindi"
  } else if (code['action'] == 2){
    sp.textContent = ` `
    if (code['mail_code'] == '0') {
        h2.textContent = `Sizning buyurtmangiz yuborildi`
    } else {
        h2.textContent = `Sizning buyurtmangiz P-${code['mail_code']} pochta bilan yuborildi`
    }
  } else if (code['action'] == 3){
    sp.textContent = ` `
    if (code['mail_code'] == '0') {
        h2.textContent = `Sizning buyurtmangiz Toshkentga yetib keldi`
    } else {
        h2.textContent = `Sizning buyurtmangiz P-${code['mail_code']} pochta bilan Toshkentga yetib keldi`
    }
  } else if (code['action'] == 4) {
    sp.textContent = ` `
    if (code['mail_code'] == '0') {
      h2.textContent = `Sizning buyurtmangiz kimniki bo'limida ${code['whois']}`
    } else {
      h2.textContent = `Sizning buyurtmangiz kimniki bo'limida ${code['whois']}`
    }
  }

  p2.textContent = code['code']
  b.textContent = code['date']
}
function codeError() {
  home.classList.remove("code_succes")
  home.classList.add("code_error")
  h1.textContent = h1_text
  p.textContent = shtrix.value
}
function codeEmpty() {
  shtrix.setAttribute("style", "border-color: red;")
  setTimeout(() => {
    shtrix.setAttribute("style", "")
  }, 1000);
}
function resetAll() {
  let home = document.getElementById("home");
  home.classList.remove("code_error")
  home.classList.remove("code_succes")
  shtrix.value = ""
}
