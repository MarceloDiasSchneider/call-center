/* cominication between javascript and php to inser date into a database */
document.querySelector('#button').addEventListener('click', () => {
    /* get data from inpot */
    let dateSelected = document.querySelector('#date-selected').value
    let responseble = document.querySelector('#responsible').value
    let order = document.querySelector('#order').value
    
    /* creating a array to transport the data */
    let dataToInser = {
        d : dateSelected,
        r : responseble,
        o : order
    }
    $.post('php/save.php', dataToInser, function(phpReturns, state){
        if(state == 'success'){
            $('#res').html(phpReturns) 
        } else{
            $('#res').html('We had a problem') 
        }
        
    })

})