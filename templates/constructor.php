<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ni**er</title>
    <link rel="stylesheet" href="../css/test.css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
</head>

<body>
<div class="main">
    <div class="text">Тест на конструктора</div>
    <div class="constructor-block">

    </div>
    <div class="description-text">
        <div class="block-questions">
            <form action="constructor.php" method="post">
                <h2>Статика - это раздел теоретической механики, которая изучает:</h2>
                    <input type="radio" name="one" id="" value="1">Поведение тел при воздействии на них внешних сил.<br>
                    <input type="radio" name="one" id="" value="2">Поведение тел при воздействии на них внутренних сил.<br>
                    <input type="radio" name="one" id="" value="3">Равновесие тел под действием сил.<br>

                    <h2>Как формулируется основной закон динамики?</h2>
                    <input type="radio" name="two" id="" value="1">Произведение массы материальной точки и вектора ее ускорение равняется векторной сумме действующих на материальную точку сил.<br>
                    <input type="radio" name="two" id="" value="2">Силы, которые действуют на тело, двигают его ускоренно.<br>
                    <input type="radio" name="two" id="" value="3">Тело двигается под действием силы равномерно и прямолинейно.<br>

                    <h2> Каким способом изготавливается большинство чугунных изделий?</h2>
                    <input type="radio" name="three" id="" value="1">Обработкой давлением.<br>
                    <input type="radio" name="three" id="" value="2">Механической обработкой.<br>
                    <input type="radio" name="three" id="" value="3">Литьем<br>

                    <h2> При каком взаимном расположении валов возможно применение цепной передачи?</h2>
                    <input type="radio" name="four" id="" value="1">Оси валов параллельны<br>
                    <input type="radio" name="four" id="" value="2">Пересекаются под некоторым углом.<br>
                    <input type="radio" name="four" id="" value="3">Пересекаются под прямым углом.<br>

                    <h2>Действие связей на тело может быть заменено:</h2>
                    <input type="radio" name="five" id="" value="1">Реакцией<br>
                    <input type="radio" name="five" id="" value="2">Уравновешивающей<br>
                    <input type="radio" name="five" id="" value="3">Равнодействующей<br>

                    <h2>В кинематике ускорением точки называют векторную величину, которая равняется:</h2>
                    <input type="radio" name="six" id="" value="1">Отношению скорости к интервалу времени, за которое это изменение произошло;<br>
                    <input type="radio" name="six" id="" value="2">Отношению изменения скорости к интервалу времени, за которое это изменение произошло;<br>
                    <input type="radio" name="six" id="" value="3">Произведения изменения скорости на интервал времени, за которое это изменение произошло;<br>

                    <h2>Определить, какая марка высококачественной стали имеет следующий химический состав: 0,6% - С; 2% - Si; 1,2% - Cr; 0,1% - V?</h2>
                    <input type="radio" name="seven" id="" value="1">60C2ХФ<br>
                    <input type="radio" name="seven" id="" value="2">60C2ХФА.<br>
                    <input type="radio" name="seven" id="" value="3">C2ХФ1А.<br>

                    <h2>Ниже перечислены цилиндрические детали, используемые для создания соединений. Какие из них не относятся к резьбовым?</h2>
                    <input type="radio" name="eight" id="" value="1">Штифт<br>
                    <input type="radio" name="eight" id="" value="2">Винт<br>
                    <input type="radio" name="eight" id="" value="3">Шпилька<br>

                    <h2>Укажите передаточные механизмы, в которых фрикционные передачи получила наибольшее распространение.</h2>
                    <input type="radio" name="nine" id="" value="1">Редукторы<br>
                    <input type="radio" name="nine" id="" value="2">Мультипликаторы<br>
                    <input type="radio" name="nine" id="" value="3">Вариаторы<br>

                    <h2>Количественное измерение механического взаимодействия материальных тел зовут:</h2>
                    <input type="radio" name="ten" id="" value="1">Связью<br>
                    <input type="radio" name="ten" id="" value="2">Силой<br>
                    <input type="radio" name="ten" id="" value="3">Ускорением<br>

                        <input type="submit" class="buttonOk" value="Узнать результат">
                    <div class="empty">

                    <?php

                        if(!empty($_POST)) {
                            $first_question = $_POST['one'];
                            $second_question = $_POST['two'];
                            $third_question= $_POST['three'];
                            $fourth_question = $_POST['four'];
                            $fifth_question = $_POST['five'];
                            $sixth_question = $_POST['six'];
                            $seventh_question = $_POST['seven'];
                            $eighth_question = $_POST['eight'];
                            $ninth_question = $_POST['nine'];
                            $tenth_question = $_POST['ten'];


                            echo $first_question;
                            echo $second_question;
                            echo $third_question;
                            echo $fourth_question;
                            echo $sixth_question;
                            echo $seventh_question;
                            echo $eighth_question;
                            echo $ninth_question;
                            echo $tenth_question;
                        }

                        $conn = new mysqli("localhost", "root", "1111", "accounting", "3306");

                        mysqli_set_charset($conn, 'utf8');
                        $host = "localhost";
                        $user = "root";
                        $password = "1111";
                        $database_name = "accounting";

                        $link = mysqli_connect($host, $user, $password, $database_name) or die('бд настрой блять');
                        $sql = mysqli_query($conn, "
                            SELECT * FROM constructor_test;");

                        while($result = mysqli_fetch_array($sql)) {
                            echo $result['id']." | ".$result['question']." | ".$result['answer']."<br>";
                        }
                        echo $result;
                        echo $link;


                        ini_set("display_errors", 1);
                        error_reporting(-1);
                    ?>
                    </div>
            </form>
        </div>  
    </div>
</div>

</body>
</html>