<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | Vocablurary</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
<header class="p-1 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="align-items-center ">
            <img width="100px" src="https://i.ibb.co/hmZRhNL/logo.png" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php if($_COOKIE['user'] != ''): ?>
          <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="./vocablurary.php" class="nav-link px-2 text-secondary">Vocabulary</a></li>
          <li><a href="./grammar.php" class="nav-link px-2 text-white">Grammar</a></li>
          <li><a href="./homework.php" class="nav-link px-2 text-white">Homework</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./about.html" class="nav-link px-2 text-white">About</a></li>
        <?php else: ?>
          <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./about.html" class="nav-link px-2 text-white">About</a></li>
        <?php endif ?>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <?php if($_COOKIE['user'] == ''): ?>
        <div class="text-end py-lg-3 py-5">
            <a href="./pages/sign-in.php" class="btn btn-outline-light me-2">Student</a>
            <a href="./pages/sign-in-superuser.php" class="btn btn-warning">Teacher</a>
        </div>
        <?php else:?>
            <a href="./pages/profile.php" class="btn btn-outline-light me-2">Profile, <?=$_COOKIE['user']?></a>
        <?php endif;?>
      </div>
    </div>
</header>
    <hr>
    <div class="container">
        <table class="mt-4 mb-4" id="customers">
            <tr>
                <th class="bg-dark top-word">Number</th>
                <th class="bg-dark top-word">English</th>
                <th class="bg-dark top-word">Ukranian</th>
            </tr>
            <tr>
                <td class="number">1</td>
                <td>By far</td>
                <td class="ukranian">Безумовно</td>
            </tr>
            <tr>
                <td class="number">2</td>
                <td>Stare at</td>
                <td class="ukranian">Дивитися</td>
            </tr>
            <tr>
                <td class="number">3</td>
                <td>Proceed</td>
                <td class="ukranian">Продовжувати</td>
            </tr>
            <tr>
                <td class="number">4</td>
                <td>Right</td>
                <td class="ukranian">Права</td>
            </tr>
            <tr>
                <td class="number">5</td>
                <td>Evil</td>
                <td class="ukranian">Зло</td>
            </tr>
            <tr>
                <td class="number">6</td>
                <td>Despite</td>
                <td class="ukranian">Не дивлячись на</td>
            </tr>
            <tr>
                <td class="number">7</td>
                <td>Proposal</td>
                <td class="ukranian">Пропозиція</td>
            </tr>
            <tr>
                <td class="number">8</td>
                <td>Exist</td>
                <td class="ukranian">Існувати</td>
            </tr>
            <tr>
                <td class="number">9</td>
                <td>Posses</td>
                <td class="ukranian">Володіти</td>
            </tr>
            <tr>
                <td class="number">10</td>
                <td>Interaction</td>
                <td class="ukranian">Взаємодія</td>
            </tr>
            <tr>
                <td class="number">11</td>
                <td>Beyond</td>
                <td class="ukranian">За гранею</td>
            </tr>
            <tr>
                <td class="number">12</td>
                <td>Constellation</td>
                <td class="ukranian">Сузір'я</td>
            </tr>
            <tr>
                <td class="number">13</td>
                <td>Continously</td>
                <td class="ukranian">Неперервно</td>
            </tr>
            <tr>
                <td class="number">14</td>
                <td>Estimate</td>
                <td class="ukranian">Оцінювати</td>
            </tr>
            <tr>
                <td class="number">15</td>
                <td>Intersteller</td>
                <td class="ukranian">Міжзірковий</td>
            </tr>
            <tr>
                <td class="number">16</td>
                <td>Revise</td>
                <td class="ukranian">Повторювати</td>
            </tr>
            <tr>
                <td class="number">17</td>
                <td>Satellite</td>
                <td class="ukranian">Спутник</td>
            </tr>
            <tr>
                <td class="number">18</td>
                <td>Space prob</td>
                <td class="ukranian">Космічний зонт</td>
            </tr>
            <tr>
                <td class="number">19</td>
                <td>Valuable</td>
                <td class="ukranian">Цінний</td>
            </tr>
            <tr>
                <td class="number">20</td>
                <td>Alter</td>
                <td class="ukranian">Змінювати</td>
            </tr>

            <!---------------------------------------------------------->

            <tr>
                <td class="number">21</td>
                <td>Goverment</td>
                <td class="ukranian">Уряд</td>
            </tr>
            <tr>
                <td class="number">22</td>
                <td>Rapid</td>
                <td class="ukranian">Стрімкий, швидкий</td>
            </tr>
            <tr>
                <td class="number">23</td>
                <td>Recognise</td>
                <td class="ukranian">Впізнавати</td>
            </tr>
            <tr>
                <td class="number">24</td>
                <td>Require</td>
                <td class="ukranian">Потребувати</td>
            </tr>
            <tr>
                <td class="number">25</td>
                <td>Sensational story</td>
                <td class="ukranian">Сенсаційна історія</td>
            </tr>
            <tr>
                <td class="number">26</td>
                <td>Siblings</td>
                <td class="ukranian">Рідний брат або сестра</td>
            </tr>
            <tr>
                <td class="number">27</td>
                <td>Strenth</td>
                <td class="ukranian">Сила</td>
            </tr>
            <tr>
                <td class="number">28</td>
                <td> The tabloid press</td>
                <td class="ukranian">Журнали, газети, листівки</td>
            </tr>
            <tr>
                <td class="number">29</td>
                <td>Ultimately</td>
                <td class="ukranian">Остаточно</td>
            </tr>
            <tr>
                <td class="number">30</td>
                <td>Broad</td>
                <td class="ukranian">Розширяти</td>
            </tr>
            <tr>
                <td class="number">31</td>
                <td>Deep</td>
                <td class="ukranian">Глибокий</td>
            </tr>
            <tr>
                <td class="number">32</td>
                <td>Dull</td>
                <td class="ukranian">Нудний, скучний, темний</td>
            </tr>
            <tr>
                <td class="number">33</td>
                <td>Exposed to sth</td>
                <td class="ukranian">Підвергнутий</td>
            </tr>
            <tr>
                <td class="number">34</td>
                <td>Fungus</td>
                <td class="ukranian">Гриб</td>
            </tr>
            <tr>
                <td class="number">35</td>
                <td>Make up my mind</td>
                <td class="ukranian">Вирішити</td>
            </tr>
            <tr>
                <td class="number">36</td>
                <td>Get stuck</td>
                <td class="ukranian">Застряти в трафіку</td>
            </tr>
            <tr>
                <td class="number">37</td>
                <td>Due to</td>
                <td class="ukranian">Через, із-за</td>
            </tr>
            <tr>
                <td class="number">38</td>
                <td>Sophisticatet</td>
                <td class="ukranian">Супер-вишуканий</td>
            </tr>
            <tr>
                <td class="number">39</td>
                <td>Boast</td>
                <td class="ukranian">Хвастатися</td>
            </tr>
            <tr>
                <td class="number">40</td>
                <td>Competitor</td>
                <td class="ukranian">Соперник</td>
            </tr>

            <!----------------------------->

            <tr>
                <td class="number">41</td>
                <td>Rush of my feet</td>
                <td class="ukranian">Спішити</td>
            </tr>
            <tr>
                <td class="number">42</td>
                <td>Audience</td>
                <td class="ukranian">Аудиторія</td>
            </tr>
            <tr>
                <td class="number">43</td>
                <td>Dressing</td>
                <td class="ukranian">Одягатися відповідно</td>
            </tr>
            <tr>
                <td class="number">44</td>
                <td>Handcut</td>
                <td class="ukranian">Роздача</td>
            </tr>
            <tr>
                <td class="number">45</td>
                <td>Sum up</td>
                <td class="ukranian">Підсумувати все</td>
            </tr>
            <tr>
                <td class="number">46</td>
                <td>Gestures</td>
                <td class="ukranian">Жести</td>
            </tr>
            <tr>
                <td class="number">47</td>
                <td>Stare</td>
                <td class="ukranian">П'ялитися</td>
            </tr>
            <tr>
                <td class="number">48</td>
                <td>Auter planet</td>
                <td class="ukranian">Зовняшня планета</td>
            </tr>
            <tr>
                <td class="number">49</td>
                <td>Cause harm</td>
                <td class="ukranian">Спричиняти</td>
            </tr>
            <tr>
                <td class="number">50</td>
                <td>Cross my mind</td>
                <td class="ukranian">Спасти на думку</td>
            </tr>
            <tr>
                <td class="number">51</td>
                <td>Universe</td>
                <td class="ukranian">Вселенна</td>
            </tr>
            <tr>
                <td class="number">52</td>
                <td>ISS International Space Station</td>
                <td class="ukranian">Міжнародна космічна станція</td>
            </tr>
            <tr>
                <td class="number">53</td>
                <td>Tutor</td>
                <td class="ukranian">Репетитор</td>
            </tr>
            <tr>
                <td class="number">54</td>
                <td>Avoid</td>
                <td class="ukranian">Уникати</td>
            </tr>
            <tr>
                <td class="number">55</td>
                <td>Undoubtedly</td>
                <td class="ukranian">Без вагань</td>
            </tr>
            <tr>
                <td class="number">56</td>
                <td>Engage</td>
                <td class="ukranian">Залучити, займатися</td>
            </tr>
            <tr>
                <td class="number">57</td>
                <td>Conzern</td>
                <td class="ukranian">Турбота</td>
            </tr>
            <tr>
                <td class="number">58</td>
                <td>Enforcement</td>
                <td class="ukranian">Сприяння</td>
            </tr>
            <tr>
                <td class="number">59</td>
                <td>Canned</td>
                <td class="ukranian">Консерва</td>
            </tr>
            <tr>
                <td class="number">60</td>
                <td>Wheelchair</td>
                <td class="ukranian">Інвалідний візочок</td>
            </tr>

            <!----------------------------->

            <tr>
                <td class="number">61</td>
                <td>Crutches</td>
                <td class="ukranian">Милиці</td>
            </tr>
            <tr>
                <td class="number">62</td>
                <td>Determined</td>
                <td class="ukranian">Рішучий</td>
            </tr>
            <tr>
                <td class="number">63</td>
                <td>Amateur</td>
                <td class="ukranian">Любитель</td>
            </tr>
            <tr>
                <td class="number">64</td>
                <td>Dedication</td>
                <td class="ukranian">Відданість</td>
            </tr>
            <tr>
                <td class="number">65</td>
                <td>Suffered</td>
                <td class="ukranian">Страдждати</td>
            </tr>
            <tr>
                <td class="number">66</td>
                <td>Wrist</td>
                <td class="ukranian">Зап'ястя</td>
            </tr>
            <tr>
                <td class="number">67</td>
                <td>Heel</td>
                <td class="ukranian">П'ятка</td>
            </tr>
            <tr>
                <td class="number">68</td>
                <td>Ever</td>
                <td class="ukranian">Коли-небудь</td>
            </tr>
            <tr>
                <td class="number">69</td>
                <td>Primary school</td>
                <td class="ukranian">Початкова школа</td>
            </tr>
            <tr>
                <td class="number">70</td>
                <td>Single out</td>
                <td class="ukranian">Вибирати, виділяти</td>
            </tr>
            <tr>
                <td class="number">71</td>
                <td>Tackle</td>
                <td class="ukranian">Перехватити м'яч</td>
            </tr>
            <tr>
                <td class="number">72</td>
                <td>Hashly</td>
                <td class="ukranian">Грубо</td>
            </tr>
            <tr>
                <td class="number">73</td>
                <td>Sprain</td>
                <td class="ukranian">Розтягнення</td>
            </tr>
            <tr>
                <td class="number">74</td>
                <td>Fractures</td>
                <td class="ukranian">Тріщина</td>
            </tr>
            <tr>
                <td class="number">75</td>
                <td>Leaflet</td>
                <td class="ukranian">Листівка</td>
            </tr>
            <tr>
                <td class="number">76</td>
                <td>Anniversary</td>
                <td class="ukranian">Годовщина</td>
            </tr>
            <tr>
                <td class="number">77</td>
                <td>Chill</td>
                <td class="ukranian">Релакс</td>
            </tr>
            <tr>
                <td class="number">78</td>
                <td>Athlethics track</td>
                <td class="ukranian">Бігова длоіжка</td>
            </tr>
            <tr>
                <td class="number">79</td>
                <td>Short of breath</td>
                <td class="ukranian">Задихатися</td>
            </tr>
            <tr>
                <td class="number">80</td>
                <td>Leisure center</td>
                <td class="ukranian">Центр досуга</td>
            </tr>

            <!----------------------------->

            <tr>
                <td class="number">81</td>
                <td>Trampoline</td>
                <td class="ukranian">Батут</td>
            </tr>
            <tr>
                <td class="number">82</td>
                <td>Fainted</td>
                <td class="ukranian">Втратити свідомість</td>
            </tr>
            <tr>
                <td class="number">83</td>
                <td>Unconscious</td>
                <td class="ukranian">Без свідомості</td>
            </tr>
            <tr>
                <td class="number">84</td>
                <td>Concussion</td>
                <td class="ukranian">Стряс мозку</td>
            </tr>
            <tr>
                <td class="number">85</td>
                <td>See double</td>
                <td class="ukranian">Двоїтисяв очах</td>
            </tr>
            <tr>
                <td class="number">86</td>
                <td>Purpose</td>
                <td class="ukranian">Ціль</td>
            </tr>
            <tr>
                <td class="number">87</td>
                <td>Complain</td>
                <td class="ukranian">Жалітися</td>
            </tr>
            <tr>
                <td class="number">88</td>
                <td>Attitude</td>
                <td class="ukranian">Відношення</td>
            </tr>
            <tr>
                <td class="number">89</td>
                <td>Make an arrangemant</td>
                <td class="ukranian">Домовитись</td>
            </tr>
            <tr>
                <td class="number">90</td>
                <td>Relieved</td>
                <td class="ukranian">З полегшенням</td>
            </tr>
            <tr>
                <td class="number">91</td>
                <td>Persuade</td>
                <td class="ukranian">Вмовляти</td>
            </tr>
            <!-- I stopped here -->
            <tr>
                <td class="number">92</td>
                <td>Hashly</td>
                <td class="ukranian">Грубо</td>
            </tr>
            <tr>
                <td class="number">93</td>
                <td>Sprain</td>
                <td class="ukranian">Розтягнення</td>
            </tr>
            <tr>
                <td class="number">94</td>
                <td>Fractures</td>
                <td class="ukranian">Тріщина</td>
            </tr>
            <tr>
                <td class="number">95</td>
                <td>Leaflet</td>
                <td class="ukranian">Листівка</td>
            </tr>
            <tr>
                <td class="number">96</td>
                <td>Anniversary</td>
                <td class="ukranian">Годовщина</td>
            </tr>
            <tr>
                <td class="number">97</td>
                <td>World of good</td>
                <td class="ukranian">Приносити користь</td>
            </tr>
            <tr>
                <td class="number">98</td>
                <td>Athlethics track</td>
                <td class="ukranian">Бігова длоіжка</td>
            </tr>
            <tr>
                <td class="number">99</td>
                <td>Short of breath</td>
                <td class="ukranian">Задихатися</td>
            </tr>
            <tr>
                <td class="number">100</td>
                <td>Leisure center</td>
                <td class="ukranian">Центр досуга</td>
            </tr>

        </table>
    </div>
    <hr>
    <footer class="py-5 my-4 bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-light">Album</a>
            </li>
            <li class="nav-item"><a href="../pages/vocablurary.php" class="nav-link px-2 text-light">Vocablurary</a>
            </li>
            <li class="nav-item"><a href="../pages/grammar.php" class="nav-link px-2 text-light">Grammar</a></li>
            <li class="nav-item"><a href="../pages/homework.php" class="nav-link px-2 text-light">Homework</a></li>
            <li class="nav-item"><a href="../pages/about.html" class="nav-link px-2 text-light">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-5 text-end"><b><i>Back to top</i></b></a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
</body>

</html>