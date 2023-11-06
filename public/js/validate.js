//FORM VALIDATIONS STARTS ***************************************8


$(document).ready(function() {
$('#company_name').on('input', function () {
var company_name = $(this).val();
if (company_name.length == 0) {
$('.company_name_error').text("The company name field is required.");
}
else {
$('.company_name_error').empty();
}
});

$('#joining_as').on('input', function () {
var joining_as = $(this).val();
if (joining_as.length == 0) {
$('.joining_as_error').text("The joining as field is required.");
}
else {
$('.joining_as_error').empty();
}
});

$('#lead_expiry_day').on('input', function () {
    var lead_expiry_day = $(this).val();
    if (lead_expiry_day.length == 0) {
    $('.lead_expiry_day_error').text("The expiry day field is required.");
    }
    else {
    $('.lead_expiry_day_error').empty();
    }
    });


$('#country_code').on('input', function () {
var country_code = $(this).val();
if (country_code.length == 0) {
$('.country_code_error').text("The country code field is required.");
}
else {
$('.country_code_error').empty();
}
});

$('#area_code').on('input', function () {
var area_code = $(this).val();
if (area_code.length == 0) {
$('.area_code_error').text("The area code field is required.");
}
else {
$('.area_code_error').empty();
}
});


$('#email').on('focusout', function () {
var email = $(this).val();
var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (email.length == 0) {
$('.email_error').text("The email field is required.");
}
else if (!validEmail.test(email)) {
$('.email_error').addClass('invalid-msg').text('Invalid Email Address');
}
else {
$('.email_error').empty();
}
});

$('#confirm_email').on('focusout', function () {
var confirm_email = $(this).val();
var email = $('#email').val();
var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (confirm_email.length == 0) {
$('.confirm_email_error').text("The confirm email field is required.");
}
else if (!validEmail.test(confirm_email)) {
$('.confirm_email_error').addClass('invalid-msg').text('Invalid Email Address');
}
else if(confirm_email.length > 1 && confirm_email != email) {
$('.confirm_email_error').text('The confirm email and email must match.');
} 
else {
$('.confirm_email_error').empty();
}
});

$('#business_type').on('input', function () {
var business_type = $(this).val();
if (business_type.length == 0) {
$('.business_type_error').text("The business type field is required.");
}
else {
$('.business_type_error').empty();
}
});

$('#annual_turnover').on('input', function () {
var annual_turnover = $(this).val();
if (annual_turnover.length == 0) {
$('.annual_turnover_error').text("The annual turnover field is required.");
}
else {
$('.annual_turnover_error').empty();
}
});

$('#year_established').on('input', function () {
var year_established = $(this).val();
if (year_established.length == 0) {
$('.year_established_error').text("The year established field is required.");
}
else {
$('.year_established_error').empty();
}
});

$('#number_of_employees').on('input', function () {
var number_of_employees = $(this).val();
if (year_established.length == 0) {
$('.number_of_employees_error').text("The number of employees field is required.");
}
else {
$('.number_of_employees_error').empty();
}
});

$('#brief_introduction').on('input', function () {
var brief_introduction = $(this).val();
if (brief_introduction.length == 0) {
$('.brief_introduction_error').text("The brief introduction field is required.");
}
else {
$('.brief_introduction_error').empty();
}
});

$('#title').on('input', function () {
var title = $(this).val();
if (title.length == 0) {
$('.title_error').text("The title field is required.");
}
else {
$('.title_error').empty();
}
});

$('#first_name').on('input', function () {
var first_name = $(this).val();
if (first_name.length == 0) {
$('.first_name_error').text("The first name field is required.");
}
else {
$('.first_name_error').empty();
}
});

$('#last_name').on('input', function () {
var last_name = $(this).val();
if (last_name.length == 0) {
$('.last_name_error').text("The last name field is required.");
}
else {
$('.last_name_error').empty();
}
});

$('#company_name').on('input', function () {
var company_name = $(this).val();
if (company_name.length == 0) {
$('.company_name_error').text("The company name field is required.");
}
else {
$('.company_name_error').empty();
}
});

$('#position').on('input', function () {
var position = $(this).val();
if (position.length == 0) {
$('.position_error').text("The position field is required.");
}
else {
$('.position_error').empty();
}
});

$('#office_number').on('input', function () {
var office_number = $(this).val();
if (office_number.length == 0) {
$('.office_number_error').text("The office number field is required.");
}
else {
$('.office_number_error').empty();
}
});

$('#road_number').on('input', function () {
var road_number = $(this).val();
if (road_number.length == 0) {
$('.road_number_error').text("The road number field is required.");
}
else {
$('.road_number_error').empty();
}
});

$('#building_number').on('input', function () {
var building_number = $(this).val();
if (building_number.length == 0) {
$('.building_number_error').text("The building number field is required.");
}
else {
$('.building_number_error').empty();
}
});

$('#city').on('input', function () {
var city = $(this).val();
if (city.length == 0) {
$('.city_error').text("The city field is required.");
}
else {
$('.city_error').empty();
}
});

// $('#zip').on('input', function () {
// var zip = $(this).val();
// if (zip.length == 0) {
// $('.zip_error').text("The zip field is required.");
// }
// else {
// $('.zip_error').empty();
// }
// });

$('#state').on('input', function () {
var state = $(this).val();
if (state.length == 0) {
$('.state_error').text("The state field is required.");
}
else {
$('.state_error').empty();
}
});

$('#country').on('input', function () {
var country = $(this).val();
if (country.length == 0) {
$('.country_error').text("The country field is required.");
}
else {
$('.country_error').empty();
}
});


$('#official_email').on('focusout', function () {
var official_email = $(this).val();
var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (official_email.length == 0) {
$('.official_email_error').text("The official email field is required.");
}
else if (!validEmail.test(official_email)) {
$('.official_email_error').addClass('invalid-msg').text('Invalid Email Address');
}
else {
$('.official_email_error').empty();
}
});


// $('#skype').on('input', function () {
// var skype = $(this).val();
// if (skype.length == 0) {
// $('.skype_error').text("The skype field is required.");
// }
// else {
// $('.skype_error').empty();
// }
// });

$('#whatsApp').on('input', function () {
var whatsApp = $(this).val();
if (whatsApp.length == 0) {
$('.whatsApp_error').text("The whatsapp field is required.");
}
else {
$('.whatsApp_error').empty();
}
});

// $('#website').on('input', function () {
// var website = $(this).val();
// if (website.length == 0) {
// $('.website_error').text("The website field is required.");
// }
// else {
// $('.website_error').empty();
// }
// });

$('#phone_number').on('input', function () {
var phone_number = $(this).val();
if (phone_number.length == 0) {
$('.phone_number_error').text("The phone number field is required.");
}
else {
$('.phone_number_error').empty();
}
});


$('#password').on('input', function () {
var password = $(this).val();

if (password.length == 0) {
$('.password_error').text("The password field is required.");
}
else {
$('.password_error').empty();
}
});

$('#new_password').on('input', function () {
    var new_password = $(this).val();
    
    if (new_password.length == 0) {
    $('.new_password_error').text("The new password field is required.");
    }
    else {
    $('.new_password_error').empty();
    }
    });

$('#confirm_password').on('input', function () {
var confirm_password = $(this).val();
var password = $('#password').val();

if (confirm_password.length == 0) {
$('.confirm_password_error').text("The confirm password field is required.");
}

else if(confirm_password.length > 1 && confirm_password != password ) {
$('.confirm_password_error').text('The confirm password and password must match.');
} 
else {
$('.confirm_password_error').empty();
}
});

// MEMBER BUY LEADS FORM VALIDATIONS STARTS ******************************************************
$('#product_category').on('input', function () {
    var product_category = $(this).val();
    if (product_category.length == 0) {
    $('.product_category_error').text("The product category field is required.");
    }
    else {
    $('.product_category_error').empty();
    }
    });

    $('#buy_product_category').on('input', function () {
        var buy_product_category = $(this).val();
        if (buy_product_category.length == 0) {
        $('.product_category_error').text("The product category field is required.");
        }
        else {
        $('.product_category_error').empty();
        }
        });
    
    $('#product_name').on('input', function () {
        var product_name = $(this).val();
    
        if (product_name.length == 0) {
        $('.product_name_error').text("The product name field is required.");
        }
        else {
        $('.product_name_error').empty();
        }
    });

    $('#buy_product_name').on('input', function () {
        var buy_product_name = $(this).val();
    
        if (buy_product_name.length == 0) {
        $('.product_name_error').text("The product name field is required.");
        }
        else {
        $('.product_name_error').empty();
        }
    });
    
    $('#description').on('input', function () {
        var description = $(this).val();
        if (description.length == 0) {
        $('.description_error').text("The description field is required.");
        }
        else {
        $('.description_error').empty();
        }
    }); 

    $('#buydescription').on('input', function () {
        var buydescription = $(this).val();
        if (buydescription.length == 0) {
        $('.description_error').text("The description field is required.");
        }
        else {
        $('.description_error').empty();
        }
    }); 
    
    $('#quantity').on('input', function () {
        var quantity = $(this).val();
        var isnumeric  =  $.isNumeric(quantity);
 
        if (quantity.length == 0) {
        $('.quantity_error').text("The quantity field is required.");
          
        }else if(isnumeric === false)
        {
            $('.quantity_error').text("The quantity must be a number.");
        }else{
            $('.quantity_error').empty();
        }
     
    }); 

    $('#sellprice').on('input', function () {
        var sellprice = $(this).val();
        var isnumeric  =  $.isNumeric(sellprice);
        if (sellprice.length == 0) {
            $('.price_error').text("The price field is required..");
              
            }else if(isnumeric === false)
            {
                $('.price_error').text("The price must be a number.");
            }else{
                $('.price_error').empty();
            }
    }); 

    $('#lead_expiry_date').on('input', function () {
        var lead_expiry_date = $(this).val();
     
        if (lead_expiry_date.length == 0) {
        $('.lead_expiry_date_error').text("The expiry date field is required.");
        }
        else {
        $('.lead_expiry_date_error').empty();
        }
    }); 
    
    
// MEMBER BUY LEADS FORM VALIDATIONS ENDS ******************************************************




});


// $('#confirm_password').on('input', function () {
//     var confirm_password = $(this).val();

//     var new_password = $('#new_password').val();
//     if (confirm_password.length == 0) {
//     $('.confirm_password_error').text("The confirm password field is required.");
//     }
    
//     else if(confirm_password.length > 1 && confirm_password != new_password) {
//     $('.confirm_password_error').text('The confirm password and new password must match.');
//     } 
//     else {
//     $('.confirm_password_error').empty();
//     }
//     });





