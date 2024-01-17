<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://unpkg.com/imask"></script>
    <script defer src="main.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
    <header class="bg-blue">
      <nav class="container">
        <a href="#portfolio">Портфолио</a>
        <a href="#about">Обо мне</a>
        <a href="#contact">Контакты</a>
      </nav>
    </header>
    <section class="bg-blue">
      <div class="container introduction">
        <div>
          <h1 class="introduction__header">Меня зовут Мустафа</h1>
          <p class="introduction__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </p>
        </div>
        <div>
          <img src="images/me.png" class="introduction__img" />
        </div>
      </div>
    </section>
    <section id="portfolio" class="bg-grey">
      <div class="portfolio container">
        <h1 class="portfolio__title">Портфолио</h1>
        <div class="portfolio__arrows">
          <img class="portfolio__arrow-img" src="images/arrow 3.png" alt="" />
          <img class="portfolio__arrow-img" src="images/arrow 2.png" alt="" />
        </div>
        <div class="portfolio__template">
          <p class="portfolio__option">
            AI DIGITAL CORPORATE PRESENTATION TEMPLATE
          </p>
        </div>
        <div class="portfolio__info">
          <img class="portfolio__img" src="images/portfolio-img.png" alt="" />
          <div class="portfolio__skills">
            <p class="portfolio__skill">ux / ui design</p>
            <p class="portfolio__skill">development</p>
            <p class="portfolio__skill">adaptives for tablet and phone</p>
            <p class="portfolio__skill">animation support</p>
            <button class="portfolio__btn">Посмотреть</button>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="bg-blue">
      <div class="wrapper about">
        <div class="about__article">
          <h1 class="about__title">Обо мне</h1>
          <p class="about__bio">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
          </p>
        </div>
        <div>
          <div>
            <img class="about__image" src="images/me.png" />
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="bg-grey">
      <div class="container">
        <div class="contact">
          <h1 class="contact__title text-center">Обсудим проект?</h1>
          <div>
            <p class="contact__text text-center">
              Заполните форму обратной связи
            </p>
          </div>
          <div>
            <p>Ваше имя</p>
            <input class="contact__input" type="text" placeholder="Мустафа" />
          </div>
          <div>
            <p>Ваше email</p>
            <input
              id="email"
              class="contact__input"
              type="email"
              placeholder="mail@example.com"
            />
          </div>
          <div>
            <p>Ваш телефон</p>
            <input
              id="phone-mask"
              class="contact__input"
              type="text"
              placeholder="+7928 777 65 55"
            />
          </div>
          <button class="contact__btn">Отправить</button>
          <p class="contact__text">
            Или свяжитесь со мной удобным способом связи, расположенным ниже
          </p>
        </div>
      </div>
    </section>
  </body>
</html>
