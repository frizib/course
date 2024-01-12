<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Провайдер ПолитехТелеком предоставляет быстрый и надежный интернет" />
      <meta name="keywords" content="ПолитехТелеком, провайдер связи, интернет, быстрый интернет, мобильная связь, работа, IT" />
      <meta name="author" content="AFriz Corp" />
      <meta name="robots" content="index, follow" />
      <meta name="title" content="ПолитехТелеком - Ваш провайдер связи и интернета" />
      <title>ПолитехТелеком</title>
      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link rel="stylesheet" href="{{ asset('css/panel_style.css') }}">
      <script src="{{ asset('js/panel_script.js') }}"></script>
   </head>
   <body>
      <header>
         <div class="header">
            <a href="" class="logo">
            <span class="logo_img"></span>
            <span class="logo_text">ПолитехТелеком</span></a>
            <nav>
               <ul class="nav">
                  <li>
                     <p class="hotline">Горячая линия</p>
                     <a href="tel:+78000000000" class="phone-link">+7 (800) 000-00-00</a
                        >
                  </li>
                  <li>
                     <a href="login.html" class="nav_panel" style="color: #fff"
                        >Выйти</a
                        >
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <div class="user-panel">
         <div class="div">
            <div class="left-panel">
               <div class="text-wrapper">Подключенные услуги</div>
               <div class="text-wrapper-2">Пополнить баланс</div>
               <div class="text-wrapper-3">Списания и пополнения</div>
               <div class="text-wrapper-4">Отсрочка платежа</div>
               <div class="text-wrapper-5">Документы</div>
               <div class="text-wrapper-6">Сообщения</div>
               <div class="text-wrapper-7">Смена пароля</div>
               <div class="text-wrapper-8">Выйти</div>
            </div>
            <div class="main-container">
               <div class="text-userid">Номер лицевого счета</div>
               <div class="user-fio">{{ $user->Фамилия }} {{ $user->Имя }} {{ $user->Отчество }}</div>
               <div class="text-balance">Баланс</div>
               <div class="user-balance">{{ $user->Баланс }}₽</div>
               <div class="frame-userid">
                  <div class="overlap-group">
                     <div class="circle"></div>
                     <div class="user-code">{{ $user->Номер_договора }}</div>
                  </div>
               </div>
            </div>
            <div class="user-packets">
               <div class="text-packets">Подключенные пакеты:</div>
               <p class="packet-info">
                  @php
                  $totalPrice = 0;
                  @endphp
                  @foreach($connections as $connection)
                  {{ $connection->Вид_тарифа }} интернет - "{{ $connection->Тариф }}". <br>
                  @php
                  $totalPrice += $connection->Цена_тарифа;
                  @endphp
                  @endforeach
               </p>
               <div class="packet-prive">{{ $totalPrice }} руб\мес</div>
            </div>
            <div class="frame">
               <div class="glav">Главная&nbsp;&nbsp;/&nbsp;&nbsp;Личный кабинет</div>
            </div>
            @if($totalPrice > $user->Баланс)
            <div class="msg-panel">
               <div class="text-alert">Пополнение счета</div>
               <p class="text">
                  Уважаемый абонент! Абонентская плата списывается 1 числа каждого
                  месяца. Сейчас средств на счете недостаточно. <br />Чтобы продолжить
                  пользоваться услугами, пожалуйста, пополните счет до 31 октября.
               </p>
               <p class="text-msg">
                  Произвести оплату вы можете на главной странице мобильного
                  приложения, кнопка «Пополнить».
               </p>
            </div>
            @endif
         </div>
      </div>
      <footer>
         <button
            id="scrollToTopButton"
            class="scroll-to-top-button"
            style="display: none"
            >
         &#9650;
         </button>
         <div class="footer">
            <div class="footer-up">
               <div class="frinfo">
                  <div>
                     <div class="name">
                        <span>ООО «ПолитехТелеком»</span>
                     </div>
                     <div>
                        <div>Адрес офиса:</div>
                        <div>Ул. Попова, д. 1.</div>
                        <div>Режим работы:</div>
                        <div>понедельник - воскресенье: 07:00 - 21:00</div>
                        <br />
                     </div>
                     <div class="telephone">
                        <span>Отдел продаж</span>
                        <div>
                           <a href="tel: +78000001111">+ 7 (800) 000 11 11</a>
                        </div>
                     </div>
                     <div class="telephone">
                        <span>Служба поддержки</span>
                        <div>
                           <a href="tel: +78000002222">+ 7 (800) 000 22 22</a>
                        </div>
                     </div>
                     <div>
                        <span>Электронная почта:</span>
                        <span class="email">info@policom.ru</span>
                     </div>
                  </div>
               </div>
               <div class="lists">
                  <div class="fmenu">
                     <span class="fmsubject">Абонентам</span>
                     <ul>
                        <li>
                           <a href="#">Оплатить</a>
                        </li>
                        <li>
                           <a href="#">Личный кабинет</a>
                        </li>
                        <li>
                           <a href="#">Справочник</a>
                        </li>
                        <li>
                           <a href="#">Контакты</a>
                        </li>
                     </ul>
                  </div>
                  <div class="fmenu">
                     <span class="fmsubject">Информация и Сервисы</span>
                     <ul>
                        <li><a href="#">Работа в ПолитехТелеком</a></li>
                        <li>
                           <a href="#">Текущие акции</a>
                        </li>
                        <li>
                           <a href="#">Карта офисов</a>
                        </li>
                     </ul>
                  </div>
                  <div class="fmenu">
                     <span class="fmsubject">О компании</span>
                     <ul>
                        <li>
                           <a href="#">Новости и уведомления</a>
                        </li>
                        <li><a href="#">Руководство</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>