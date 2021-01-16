/* variable to control if all input has been changed */
let date = false
let responsible = false
let order = false

/* Listen to input DATE to release the button confirm */
document.querySelector('#date').addEventListener('change', () => {
    /* getting date from input */
    let calendaraDateValue = document.querySelector('#date').value
    /* Setting date into a input */
    document.querySelector('#date-selected').value = calendaraDateValue
    
    date = true
    releaseBottunConfirm()
})

/* Listen to input RESPONSIBLE to release the button confirm */
document.querySelector('#responsible').addEventListener('change', () => {
    responsible = true
    releaseBottunConfirm()
})

/* Listen to input RESPONSIBLE to release the button confirm */
document.querySelector('#order').addEventListener('change', () => {
    order = true
    releaseBottunConfirm()
})


/* release the bottun if all inputs have been changed */
function releaseBottunConfirm (){
    if(date && responsible && order){
        document.querySelector('#button').removeAttribute('disabled')
    }
}