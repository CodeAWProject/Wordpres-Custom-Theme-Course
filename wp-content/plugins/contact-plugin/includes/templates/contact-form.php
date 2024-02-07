
<form id="enquiry_form">
    <label for="name">Name</label>
    <input type="text" name="name"><br/><br/>

    <label for="email">Email</label>
    <input type="text" name="email"><br/><br/>

    <label for="phone">Phone</label>
    <input type="text" name="phone"><br/><br/>
    
    <label for="message">Name</label>
    <textarea name="message"></textarea><br/>

    <button type="submit">Submit form</button>
</form>

<script>

    jQuery(document).ready(function($){


        $("#enquiry_form").submit( function(event) {


            //Stop loading
            event.preventDefault();

            var form = $(this);

            console.log(form.serialize());


            // Ajax request through the Wordpress
            $.ajax({
                type: "POST",
                url: "<?php echo get_rest_url(null, 'v1/contact-form/submit');?>",
                data: form.serialize()
            })
        });
    });

</script>