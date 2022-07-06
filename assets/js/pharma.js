
const responsive = document.querySelector("#responsive")
const menu = document.querySelector("#menu")


responsive.addEventListener("click", function () {
    menu.classList.toggle("active")

    if (menu.classList.contains("active")) {
        responsive.innerHTML = `<span class="fa fa-x"></span>`
        responsive.style.fontSize = 16 + "px"
    }

    else {
        responsive.innerHTML = `<span class="fa fa-bars"></span>`
        responsive.style.fontSize = 20 + "px"
    }
})




document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("#table-responsive").forEach((table) => {
        let labels = []
        table.querySelectorAll(".th").forEach((th) => {
            labels.push(th.innerText)
        })

        table.querySelectorAll(".td").forEach((td, index) => {
            td.setAttribute("value-label", labels[index % labels.length])
        })
    })
})


const alertMessage = document.querySelector("#message-alert")

if (alertMessage) {

    let delai = 10000

    window.setInterval(function () {
        alertMessage.style.display = "none"
    }, delai)
}