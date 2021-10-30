$(document).ready(function(){
    $('input').keyup(function () { 
        if( $('#firstName').val() != "") {
            $('#generatedFirstName').html( $('#firstName').val() );        
            $('#generatedLastName').html( $('#lastName').val() );                
            updateNickname();        
        }
    });    
})

function updateNickname(){    
    $.post( "php/main.php", { firstName: $('#firstName').val(), lastName: $('#lastName').val() })
        .done(function( data ) {            
            console.log( data );
            $('#generatedMiddleName').html (data);
    });  
}