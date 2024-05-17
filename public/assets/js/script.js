$(function () {
    const txts = $(".banner-animate-text").children(),
    txtsLen = txts.length;
    let index = 0;
    var textInTimer = 3000,
    textOutTimer = 2800;

    function animateText() {
        if (txts.length > 0)
        {
            for(let i=0; i<txtsLen; i++){
                txts[i].classList.remove("text-in","text-out");  
            }
            txts[index].classList.add("text-in");
        
            setTimeout(function() {
                txts[index].classList.add("text-out");              
            },textOutTimer)
        
            setTimeout(function()
            {
                if(index == txtsLen-2) {
                    index++;
                    textInTimer = 6000;
                    textOutTimer = 5800;
                    $('.home-slider-pre-text').slideDown();
                }
                else if(index == txtsLen-1) {
                    index=0;
                    textInTimer = 3000;
                    textOutTimer = 2800;
                    $('.home-slider-pre-text').slideUp();
                }
                else{
                    index++;
                    textInTimer = 3000;
                    textOutTimer = 2800;
                    $('.home-slider-pre-text').slideUp();
                }
                animateText();
        
            },textInTimer); 
        }
    }
    
    animateText();

    var authUserCountry, authUserId;

    /*******************     Get Authenticated User Start    ********************/

    $.ajaxSetup({
        beforeSend: function(xhr) {
            xhr.setRequestHeader('authorization', 'Bearer ' + localStorage.token);
        }
    });

    $.ajax({
        url: host + '/api/v1/get/authenticated-user',
        type: 'GET',
        async: false,
        success: function(response) {
            let result = response.data;
            
            if (response.status == true)
            {
                $('.user-sigin-detail').removeClass('hide');
                $('.sign-in-btn').addClass('hide');
                $('.enroll-btn').addClass('enroll-now-btn').removeClass('sign-in-btn');

                $('span.user-name').text(result.first_name);
                let userProfile = result.profile;
                
                authUserId = result.user_uuid;
                authUserCountry = userProfile.country_details.country_code;
            }
            else
            {
                $('.user-sigin-detail').addClass('hide');
                $('.sign-in-btn').removeClass('hide');
                $('.enroll-btn').removeClass('enroll-now-btn').addClass('sign-in-btn');
            }
        },
        error: function(response) {
            $('.user-sigin-detail').addClass('hide');
            $('.sign-in-btn').removeClass('hide');
            $('.enroll-btn').removeClass('enroll-now-btn').addClass('sign-in-btn');
        }
    });

    /*******************     Get Authenticated User End    ********************/

    /*******************    Logout Start    ********************/

    $(document).on('click', '.logout-btn', function() {
        $.ajax({
            url: host + '/api/v1/logout',
            type: 'POST',
            success: function(response) {
                localStorage.removeItem('token');
                window.location.href = '/';
            },
            error: function(response) {
                window.location.href = '/';  
            }
        });
    });

    /*******************     Logout End    ********************/

    $('#name, .text-only').on('keydown blur', function(e) {
		$(this).val($(this).val().replace(/[^a-zA-Z\.\-\s]+/g, ""));
	});
	
	$('#mobile, #phone, .numbers-only').on('keydown blur', function(e) {
		$(this).val($(this).val().replace(/[^\d]+/g, ""));
	});

    $(document).on('click', '.sign-in-btn', function() {
        $('#signin-modal').modal();
    });

    /*******************     Enrollment Start     ********************/

    $(document).on('click', '.enroll-now-btn', function(e) {
        let courseName = $(e.target).data('course'), postData;
                                               
        if (courseName.search('ai-ml-master-class') !== -1)
        {
            postData = {
                course: 'AI & ML Master Class',
                currency: 'AED',
                price: '1100',
                user_id: authUserId
            };
        }
        else if (courseName.search('ai-ml-business-leader') !== -1)
        {
            postData = {
                course: 'AI & ML For Business Leaders',
                currency: 'AED',
                price: '1100',
                user_id: authUserId
            }; 
        }

        else if (courseName.search('ai-ml-webinar') !== -1)
        {
            postData = {
                course: 'AI & ML Webniar',
                currency: 'AED',
                price: '99',
                user_id: authUserId
            }; 
        }
        
        if (authUserCountry == 'ae')
        {
            postData['tax'] = '5';
        }
        else
        {
            postData['tax'] = '0';
        }

        checkout(postData);
    });

    function checkout(postData)
    {
        $.ajax({
            url: host + '/api/v1/prepare/checkout',
            type: 'POST',
            data: postData,
            success: function(response) {
                if (response.status == true)
                {
                    window.location.href = host + '/checkout';
                }
            },
            error: function(response) {
                window.location.href = host + '/checkout';
            }
        });
    }
    
    if (window.location.pathname == '/checkout')
    {
        $.ajax({
            url: host + '/api/v1/get/from-cart',
            type: 'GET',
            data: {
                user_id: authUserId            
            },
            success: function(response) {
                if (response.status == true)
                {
                    let html;
                    let result = response.data;

                    html = '<tr>';
                    html += '<td class="pb-0">' + result.product_name + '</td>';
                    html += '<td class="pb-0"> <b>' + result.currency + '</b> ' + result.price + '</td>';
                    html += '</tr>'
                    if (result.tax_price != 0)
                    {
                        html += '<tr>';
                        html += '<td class="pt-0">VAT</td>';
                        html += '<td class="pt-0"><b>' + result.currency + '</b> ' + result.tax_price + '</td>';
                        html += '</tr>';
                    }
                    
                    html += '<tr class="border-top">';
                    html += '<th class="pt-1">TOTAL</th>'
                    html += '<th class="pt-1"><b>' + result.currency + '</b> ' + result.total_price + '</th>'
                    html += '</tr>';
                    $('.cart-details').html(html);
                    $('#course_name').val(result.product_name);
                    $('#tax').val(result.tax_price);
                    $('#price').val(result.price);
                }
            },
            error: function(response) {
                //  window.location.href = host + '/checkout';
            }
        });
    }
    

    /*******************     Enrollment End     ********************/

    /*******************     Enquiry Form Start     ********************/

    $('.enquiry-form').on('submit', function(e) {
        e.preventDefault();

        $(this).find('button[type="submit"]').prop('disabled', true);

        let name = $(this).find('#enquiry-form-name').val();
        let email = $(this).find('#enquiry-form-email').val();
        let phone = $(this).find('#enquiry-form-phone').val();

        let nameRegex = new RegExp(/^([a-z\.\-\s]{2,})+$/i);
		let validName = nameRegex.test(name);

        let emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
		let validEmail = emailRegex.test(email);

        let phoneRegex = new RegExp(/^([\d]{8,12})+$/i);
		let validPhone = phoneRegex.test(phone);


        let status = true;

        if (status)
        {
            if (name == "" || name == undefined)
            {
                $(this).find('#enquiry-form-name').next('.form-field-error').text('* Please enter a name');
                status = false;
            }
            else if (!validName)
            {
                $(this).find('#enquiry-form-name').next('.form-field-error').text('* Name should only contain alphabet');
                status = false;
            }
            else {
                $(this).find('#enquiry-form-name').next('span').text('');
                status = true;
            }
        }

        if (status)
        {
            if (email == "" || email == undefined)
            {
                $(this).find('#enquiry-form-email').next('.form-field-error').text('* Please enter a email');
                status = false;
            }
            else if (!validEmail) {
                $(this).find('#enquiry-form-email').next('span').text('* Please enter a valid email');
                status = false;
            }
            else {
                $(this).find('#enquiry-form-email').next('span').text('');
                status = true;
            }
        }

        if (status)
        {
            if (phone == "" || phone == undefined)
            {
                $(this).find('#enquiry-form-phone').next('.form-field-error').text('* Please enter the phone number');
                status = false;
            }
            else if (!validPhone) {
                $(this).find('#enquiry-form-phone').next('span').text('* Phone no must be 8 to 12 digits');
                status = false;
            }
            else {
                $(this).find('#enquiry-form-phone').next('span').text('');
                status = true;
            }
        }

        if (status)
        {
            $(this).find('button[type="submit"]').prop('disabled', true);
            $('.enquiry-form').off('submit').submit();
        } 
        else
        {
            $(this).find('button[type="submit"]').prop('disabled', false);
        }
    });

    /*******************     Enquiry Form End     ********************/


    $(".credit-card-input").payfield();

    /*******************     Checkout Form Start     ********************/

    var forms = $('.checkout-form, .sign-up-form, .sign-in-form');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        else
        {
            if ($(form).hasClass('sign-up-form'))
            {
                let firstname = $("#fname").val();
                let lastname = $("#lname").val();
                let email = $("#email").val();
                let country = $("#country").val();
                let password = $("#password").val();
                let terms = $("#accept-terms").val();
                let userType = 'Student';
                let signUpform = $(this);

                signUpform.find('button[type="submit"]').prop('disabled', true);
                $.ajax({
                    url: host + '/api/v1/sign-up/send-data',
                    method: 'POST',
                    data: {
                        fname: firstname,
                        lname: lastname,
                        email: email,
                        country: country,
                        password: password,
                        user_type: userType,
                        terms: terms
                    }, 
                    success: function(response) {
                        $('.form-error').html('');
                        window.location.href = host;
                    },
                    error: function(response) {
                        let result = response.responseJSON.data;
                        let errors = '';
                        result.error.forEach(function(value, key) {
                            errors += '<p>* ' + value + '</p>';                 
                        });
                        $('.form-error').html(errors);
                        signUpform.find('button[type="submit"]').prop('disabled', false);
                    }
                });
            }
            else if ($(form).hasClass('sign-in-form'))
            {
                let username = $("#username").val();
                let password = $("#sign-in-password").val();
                let signInform = $(this);
                console.log(username + ' -- ' + password);
                signInform.find('button[type="submit"]').prop('disabled', true);
                $.ajax({
                    url: host + '/api/v1/sign-in',
                    method: 'POST',
                    data: {
                        user_name: username,
                        password: password
                    }, 
                    success: function(response) {
                        let result = response.data;
                        $('.form-error').html('');
                        localStorage.token = result.token;
                        window.location.href = host;
                    },
                    error: function(response) {
                        let result = response.responseJSON.data;
                        let errors = '';
                        result.error.forEach(function(value, key) {
                            errors += '<p>* ' + value + '</p>';                 
                        });
                        $('.form-error').html(errors);
                        signInform.find('button[type="submit"]').prop('disabled', false);
                    }
                });
            }
            else
            {
                // signInform.find('button[type="submit"]').prop('disabled', false);
                form.submit();
            }
        }
        form.classList.add('was-validated');
      }, false);
    });

    /*******************     Checkout Form End     ********************/

});
