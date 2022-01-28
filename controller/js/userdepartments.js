const edit = Array.from(document.querySelectorAll("#edit"));
const editDept = document.querySelectorAll("#edit-dept");

for(const row of edit){
    row.addEventListener('click', () => {
        // Update below so if edit button is clicked again the form input goes back to how it was
        // Move below to function
        // Change icon to tick to submit
        const form = document.createElement('input')
        form.value = editDept[edit.indexOf(row)].textContent
        editDept[edit.indexOf(row)].textContent = ''
        editDept[edit.indexOf(row)].append(form)
    })
}