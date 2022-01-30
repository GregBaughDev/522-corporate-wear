const addDeptBtn = document.querySelector("#add-dept-btn")
const addDeptInput = document.querySelector("#add-dept")
const deptText = document.querySelector("#dept-text")

addDeptBtn.addEventListener('click', () => {
    addDeptInput.classList.toggle('no-display')
    deptText.value = ''
})