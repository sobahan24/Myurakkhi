$(document).ready(function() {
    $('.bKash_btn').click(function (e) {
        e.preventDefault();

        var fname = $('.fname').val();
        var lname = $('.lname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address1 = $('.address1').val();
        var address2 = $('.address2').val();
        var city = $('.city').val();
        var state = $('.state').val();
        var country = $('.country').val();
        var zip = $('.zip').val();

        if(!fname)
        {
            fname_error = "First Name is Required";
            $('#firstname_error').html('');
            $('#firstname_error').html(fname_error);
        }
        else{
            fname_error = "";
            $('#firstname_error').html('');
        }

        if(!lname)
        {
            lastname_error = "Last Name is Required";
            $('#lastname_error').html('');
            $('#lastname_error').html(lastname_error);
        }
        else{
            lastname_error = "";
            $('#lastname_error').html('');
        }

        if(!email)
        {
            email_error = "Email is Required";
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }
        else{
            email_error = "";
            $('#email_error').html('');
        }

        if(!phone)
        {
            phone_error = "Phone is Required";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }
        else{
            phone_error = "";
            $('#phone_error').html('');
        }

        if(!address1)
        {
            address1_error = "Address1 is Required";
            $('#address1_error').html('');
            $('#address1_error').html(address1_error);
        }
        else{
            address1_error = "";
            $('#address1_error').html('');
        }

        if(!address2)
        {
            address2_error = "Address2 is Required";
            $('#address2_error').html('');
            $('#address2_error').html(address2_error);
        }
        else{
            address2_error = "";
            $('#address2_error').html('');
        }

        if(!city)
        {
            city_error = "City is Required";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }
        else{
            city_error = "";
            $('#city_error').html('');
        }

        if(!state)
        {
            state_error = "State is Required";
            $('#state_error').html('');
            $('#state_error').html(state_error);
        }
        else{
            state_error = "";
            $('#state_error').html('');
        }

        if(!country)
        {
            country_error = "Country is Required";
            $('#country_error').html('');
            $('#country_error').html(country_error);
        }
        else{
            country_error = "";
            $('#country_error').html('');
        }

        if(!zip)
        {
            zip_error = "Zip is Required";
            $('#zip_error').html('');
            $('#zip_error').html(zip_error);
        }
        else{
            zip_error = "";
            $('#zip_error').html('');
        }

        if(fname_error != '' || lastname_error != '' || email_error != '' || phone_error != '' || address1_error != '' || address2_error != '' || city_error != '' || state_error != '' || country_error != '' || zip_error != '')
        {
            return false;
        }
        else{
            var data = {
                'fname':fname,
                'lname':lname,
                'email':email,
                'phone':phone,
                'address1':address1,
                'address2':address2,
                'city':city,
                'state':state,
                'country':country,
                'zip':zip,
            }
            $.ajax({
                method: "POST",
                url: "/proceed-to-pay",
                data: data,
                success: function (response) {

                }
            });
        }
    });
});
