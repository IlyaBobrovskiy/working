$(document).ready(function(){
            $('#log_in').click(function(){
                // собираем данные с формы
                var user_login    = $('#Login').val();
                var user_password   = $('#password').val();
                // отправляем данные
                $.ajax({
                    url: "Controller.php", // куда отправляем
                    type: "get", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "user_login":    user_login,
                        "user_password":   user_password
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            });
            $('#btn_reg').click(function(){
                // собираем данные с формы
                var user_login_reg    = $('#login2').val();
                var user_password_reg   = $('#password2').val();
                var user_confirm_password_reg    = $('#confirm_password').val();
                var user_email_reg   = $('#email').val();
                var user_name_reg   = $('#name').val();
                // отправляем данные
                $.ajax({
                    url: "Controller.php", // куда отправляем
                    type: "get", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "user_login_reg":    user_login_reg,
                        "user_password_reg":   user_password_reg,
                         "user_confirm_password_reg":    user_confirm_password_reg,
                        "user_email_reg":   user_email_reg,
                         "user_name_reg":    user_name_reg
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            });
        });