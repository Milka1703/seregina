<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Растения</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
    include("./connect.php");
?>


<body>
    <header class="container">
        <img src="./images/logo 1.svg" alt="logo">
        <nav>
            <ul>
                <li><a href="#about">О нас</a></li>
                <li><a href="#catalog">Каталог</a></li>
                <li><a href="#blog">Блог</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="cover">
            <div class="container">
                <div>
                    <h1>Джунгли у нас дома</h1>
                    <p class="cover_subtitle">У нас растения, за которыми легко ухаживать</p>
                    <button>Выбрать растение</button>
                </div>
            </div>
        </section>
        <section id="carousel-container">
            <div class="carousel">
                <div class="carousel-slide slide-first">        
                </div>
                <div class="carousel-slide slide-second">        
                </div>
                <div class="carousel-slide slide-third">        
                </div>
            </div>
            <div class="button-container">
                <button id="prevBtn">Предыдущий</button>
                <button id="nextBtn">Следующий</button>
            </div>

        </section>

        <div id="about" class="container">
            <img src="./images/about.png" alt="about_img">
            <div class="about_description">
                <h2>О нас</h2>
                <p>Наша команда из опытных специалистов выращивает здоровые растения,
                    которые будут радовать вас долгие годы. Сопровождаем каждого клиента по вопросам ухода, а при покупке
                    даём памятку по растению.</p>
            </div>
        </div>

        <?php
        $query = "SELECT * FROM products";/*fvdfv*/
        $result = $connect->query($query);
        ?>

        <section class="container" id="catalog">
            <div class="section_header">
                <h2>Наши растения</h2>
                <p>Выберите растение себе по душе</p>
            </div>
            
            <div>
                <div class="row">
                    <?php
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            $imageSrc = $row["imageSrc"];
                            $name = $row["name"];
                            $price = $row["price"];
                    ?>
                    <div class="card productCard">
                        <img src="<?php echo $imageSrc; ?>" alt="<?php echo $name;?>" class="productImage">
                        <div class="card_description">
                            <p class="productName"><?php echo $name; ?></p>
                            <p class="productPrice"><?php echo $price; ?></p>
                        </div>
                        <button onclick="openModal()">Заказать</button>
                    </div>
                    <?php
                        }
                    }else{
                       echo("<p>Товар не найден</p>"); 
                    }
                    ?>
                    <div id="myModal" class="modal">
                        <form class="modal-content" action="process_form.php" method="post">
                            <span class="close" onclick="closeModal()">х</span>

                            <input type="text" name="name" placeholder="Имя" required></input>
                            <input type="email" name="email" placeholder="Почта" required></input>
                            <input type="tel" name="phone" placeholder="Номер телефона" maxlength="12" value="+7" required></input>

                            <button type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            $imageSrc = $row["imageSrc"];
                            $name = $row["name"];
                            $price = $row["price"];
                    ?>
                    <div class="card productCard">
                        <img src="<?php echo $imageSrc; ?>" alt="<?php echo $name;?>" class="productImage">
                        <div class="card_description">
                            <p class="productName"><?php echo $name; ?></p>
                            <p class="productPrice"><?php echo $price; ?></p>
                        </div>
                        <button onclick="openModal()">Заказать</button>
                    </div>
                    <?php
                        }
                    }else{
                       echo("<p>Товар не найден</p>"); 
                    }
                    ?>
                    <div id="myModal" class="modal">
                        <form class="modal-content" action="process_form.php" method="post">
                            <span class="close" onclick="closeModal()">х</span>

                            <input type="text" name="name" placeholder="Имя" required></input>
                            <input type="email" name="email" placeholder="Почта" required></input>
                            <input type="tel" name="phone" placeholder="Номер телефона" maxlength="12" value="+7" required></input>

                            <button type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
                


        <section id="form">
            <div class="form_content container">
                <h3>Получите гайд по любому растению бесплатно</h3>
                <form action="process_form_gide.php" method="post">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="text" name="phone" placeholder="Ваш номер телефона" required>
                    <br>
                    <button type="submit">Получить гайд</button>
                </form>
            </div>
        </section>

        <section id="blog" class="container">
            <div class="section_header">
                <h2>Блог</h2>
                <p>Узнайте больше полезной информации об уходе за растениями</p>
            </div>
            <div>
                <div class="row">
                    <div class="new_card">
                        <img src="./images/news_card.png" alt="Как выбрать растение домой" class="blog_image">
                        <a href="https://inplants.ru/blog/" class="blog_description">
                            <p>Как выбрать растение домой</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="new_card">
                        <img src="./images/news_card.png" alt="Как выбрать растение домой" class="blog_image">
                        <a href="https://inplants.ru/blog/" class="blog_description">
                            <p>Как выбрать растение домой</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="new_card">
                        <img src="./images/news_card.png" alt="Как выбрать растение домой" class="blog_image">
                        <a href="https://inplants.ru/blog/" class="blog_description">
                            <p>Как выбрать растение домой</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacts">
            <div class="container contact_position">
                <div class="contacts_content">
                    <h3 class="contacts_header">Оставайтесь с нами на связи</h3>
                    <a href="">
                        <p class="contacts_link">+7 999 123 223 23</p>
                    </a>
                    <a href="" class="contacts__link link">Телеграм</a>
                    <a href="" class="contacts__link link">Вконтакте</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer_content">
            <img src="./images/logo 1.svg" alt="logo">
            <p>HomePlants</p>
            <p>2023</p>
        </div>
    </footer>
    <script src="./script.js"></script>
    <script src="./OpenModal.js"></script>
</body>

</html>