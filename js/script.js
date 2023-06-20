$(function () {
    $("a.scrollto").click(function () {
     let elementClick = $(this).attr("href")
     let destination = $(elementClick).offset().top;
     $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination }, 1100);
     return false;
    });
  });
let $form = $('form');
            $("#form").submit(function (e) { 
            e.preventDefault();
                var form_data = $(this).serialize(); 
            $.ajax({
                    type: "POST", 
                    url: "./php/mail.php", 
                    data: form_data,
                    success: function () {
                        
                        alert("Ваше сообщение отправлено!");
                    }
                });
            });

