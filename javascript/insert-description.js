/* cominication between javascript and php to inser date into a database */
document.querySelector('#confirm-description').addEventListener('click', () => {
    /* get data from inpot */
    let description = document.querySelector('#description').value

    /* creating a array to transport the data */
    let dataToInser = {
        d : description,
        /* Created on insert data */
        i : ticketLastId
    }

    /* using jQuery to comunicate with PHP */
    $.post('php/register-description.php', dataToInser, function(phpReturns, state){
        if(state == 'success'){
            if( phpReturns !== 'error'){
                //lastDescription = phpReturns
                document.querySelector('#description').value = ''
                loadDescriptions(phpReturns)
            } else {
                $('#others-descriptions').html('We had a problem on database') 
            }
        } else{
            $('#others-descriptions').html('We had a problem to connect with PHP') 
        }
    })
})