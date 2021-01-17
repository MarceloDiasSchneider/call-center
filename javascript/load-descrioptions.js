/* this functionis called when a descriptionis inserted on insert-descriptions.js */
function loadDescriptions(idTicket){
    let dataToSearch  = {
        i : idTicket
    }

    /* using jQuery to comunicate with PHP */
    $.post('php/load-descriptions.php', dataToSearch, function(phpReturns, state){
        if(state == 'success'){
            if( phpReturns !== 'error'){
                $('#others-descriptions').html(phpReturns) 
            } else {
                $('#others-descriptions').html('We had a problem on database') 
            }
        } else{
            $('#others-descriptions').html('We had a problem to connect with PHP') 
        }
    })

}