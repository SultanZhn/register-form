<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('form').on('submit', function(event){
                event.preventDefault();
                $.post('/register.php', $(this).serialize(), function(response){
                    console.log(response);
                    if(response == 'success'){
                        $('.form_btn').hide();
                        $('.btn_success').show()
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="form">
        <div id="form-container">
            <h4>Заполните форму:</h4>
            <div class="form-box">
                <form action="register.php" method="POST">
                    <div class="form_input">
                        <input type="text" placeholder="Фамилия" required name="parentSurname">
                        <input type="text" placeholder="Имя" required name="parentName">
                        <input type="number" placeholder="Номер телефона" required name="parentPhone">
                        <input type="text" placeholder="Адрес" required name="parentAddress">
                        <input type="text" placeholder="Фамилия ребенка" required name="childSurname">
                        <input type="text" placeholder="Имя ребенка" required name="childName">
                        <input type="text" placeholder="Дата рождения ребенка" required name="childDate">
                    </div>
                    <div class="form_btn">
                        <input type="submit" class="form_btn">
                    </div>
                    <div class="btn_success">
                        <h5>Успешно отправлено</h5>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>