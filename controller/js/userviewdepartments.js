const addProdBtn = document.querySelector("#add-prod-btn")
const addProd = document.querySelector("#add-prod")

addProdBtn.addEventListener('click', () => {
    addProd.classList.toggle('no-display')
})