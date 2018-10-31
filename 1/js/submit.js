$(document).ready(function() {

    // process the form
    $('#form').submit(function(event) {
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
		 $('.alert').remove();
       var formData = $(this).serialize();

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'process.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data.message); 
			console.log(data.success); 
			if (  data.success===false) {

            // handle errors for superhero alias ---------------
/*            if (data.errors.superheroAlias) {
                $('#superhero-group').addClass('has-error'); // add the error class to show red input
                $('#superhero-group').append('<div class="help-block">' + data.errors.superheroAlias + '</div>'); // add the actual error message under our input
            }*/

        } else {

            // ALL GOOD! just show the success message!
            $('form').append('<div class="alert alert-success" id="success">' + data.message + '</div>');

            // usually after form submission, you'll want to redirect

            // window.location = '/thank-you'; // redirect a user to another page
           // alert('success'); // for now we'll just alert the user
		setTimeout(function(){
        if ($('#success').length > 0) 
        {
        $('#success').fadeOut("slow");
        /*$('#success').fadeOut(500); */
        }
        }, 5000);

        }

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });


});


 

