<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto&family=Source+Sans+Pro&display=swap"
          rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <title> RoyalTest</title>
</head>
<body>
<div class="main">
    <div class="main-left-box">
        <div class="test-image"></div>
        <div class="test-title">
            TestRoyal
        </div>
        <!-- <div class="initials">
            <input type="text" placeholder="Ivanov Ivan">
        </div> -->
        <div class="tests">
            <input type="button" value="Выбрать специальность" class="button-select-spec">
        </div>

        <div class="logout">
            <input type="button" value="Выйти" class="button-exit">
        </div>
    </div>

    <div class="main-right-box">
        <!--            TODO зафигачить сюда тайтл "Выберите профессию"-->
        <!--            TODO текста не будет, когда юзер наводится на картинку всплывает инфа -->
        <!--            TODO можно на картонку наклеить название профессии-->
        <div class="welcomeText">

            Добро пожаловать на&nbsp;новый сайт тестирования &laquo;TestRoyal&raquo;!
            Данный сайт был разработан специально для тестирования различных специалистов предприятия, с&nbsp;целью распознавания их&nbsp;профессиональных знаний.
            Для продолжения работы, пожалуйста, выберите тестируемую специальность

            <?php 
                echo "hello";
            ?>
            
        </div>
    
        <div class="block">

            <div class="block-career">
                <a href="html/welder.html">
                    <div class="welder-image" id="welder">
                        <div class="fText">
                            Сварщик
                        </div>
                        <div class="sText">
                            Рабочий-специалист, занимающийся сваркой металлов
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>


            <div class="block-career">
                <a href="html/metal-engineer.html">
                    <div class="metal-engineer-image" id="metalEngineer">
                        <div class="fText">
                            Инженер-металлург
                        </div>
                        <div class="sText">
                            Инженер выбирает оптимальные технологии, целенаправленные на снижение энергозатрат 
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/economist.html">
                    <div class="economist-image" id="economist">
                        <div class="fText">
                            Экономист
                        </div>
                        <div class="sText">
                            Правильно расставить приоритеты, цели, чтобы повысить финансовую рентабельность компании
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/cutter.html">
                    <div class="cutter-image" id="cutter">
                        <div class="fText">
                            Фрезеровщик
                        </div>
                        <div class="sText">
                            Обрабатывает разные детали из металла, пластика или дерева при помощи станка с многорежущим вращательным инструментом.
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/constructor.php">
                    <div class="constructor-image" id="constructor">
                        <div class="fText">
                            Конструктор
                        </div>
                        <div class="sText">
                            Занимается проектированием различных видов техники или конструкций зданий и сооружений.
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/stamper.html">
                    <div class="stamper-image" id="stamper">
                        <div class="fText">
                            Штамповщик
                        </div>
                        <div class="sText">
                            Производит на штамповочном прессе такие детали, как: колёсные диски, ювелирные изделия, детали автомобилей
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/foundry-man.html">
                    <div class="foundry-man-image" id="foundry-man">
                        <div class="fText">
                            Литейщик
                        </div>
                        <div class="sText">
                            Рабочий, который занимается изготовлением изделий, заполняя готовые формы материалом в жидком состоянии
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/designer.html">
                    <div class="designer-image" id="designer">
                        <div class="fText">
                            Дизайнер
                        </div>
                        <div class="sText">
                            Изобретатель, который делает хорошие вещи лучше, а красивые такими, что глаз не оторвать.
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

            <div class="block-career">
                <a href="html/electrician.html">
                    <div class="electrician-image" id="electrician">
                        <div class="fText">
                            Электрик
                        </div>
                        <div class="sText">
                            Рабочий, который занимается ремонтом и установкой электрических приборов
                        </div>
                    </div>
                    <div class="welder-text">

                    </div>
                </a>
            </div>

        </div>

    </div>

</div>
</body>
<script src="js/index.js"></script>
</html>