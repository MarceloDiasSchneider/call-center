/* cominication between javascript and php to inser date into a database */
var ticketLastId = ''
document.querySelector('#confirm-form').addEventListener('click', () => {
    /* get data from input */
    let dateSelected = document.querySelector('#date-selected').value
    let responseble = document.querySelector('#responsible').value
    let order = document.querySelector('#order').value
    
    /* disabled order with ticket created */
    let x =document.querySelector('#order')
    x.remove(x.selectedIndex);
    
    /* creating a array to transport the data */
    let dataToInser = {
        d : dateSelected,
        r : responseble,
        o : order
    }

    /* using jQuery to comunicate with PHP */
    $.post('php/open-ticket.php', dataToInser, function(phpReturns, state){
        if(state == 'success'){
            if( phpReturns !== 'error'){
                document.querySelector('#div-description').classList.remove('hidden')
                document.querySelector('#others-descriptions').classList.add('hidden')
                $('#others-descriptions').html('')
                ticketLastId = phpReturns
            } else {
                $('#others-descriptions').html('We had a problem on database') 
                document.querySelector('#div-description').classList.add('hidden')
                document.querySelector('#others-descriptions').classList.remove('hidden')
            }
        } else{
            $('#others-descriptions').html('We had a problem to connect with PHP') 
            document.querySelector('#div-description').classList.add('hidden')
            document.querySelector('#others-descriptions').classList.remove('hidden')
        }
    })
})