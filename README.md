# amoCRM
# Задание
Создать аккаунт amoCRM - https://amocrm.ru. Это бесплатно на 14 дней, нам этого более чем хватит. Подтверждение не требуется, поэтому рекомендуем указывать рандомный телефон и все прочие данные.
Создать в сущности сделки два поля типа число с названиями «Себестоимость» и «Прибыль». (Для этого создать сделку, зайти в нее, провалиться в настройки и там добавить поля). Поле “Прибыль” доступно к изменению только из API.

Реализация
Необходимо реализовать интеграцию, которая при создании или любом изменении сделки будет рассчитывать прибыль по формуле:
«Бюджет сделки» - «Себестоимость» = «Прибыль».
Механика должна корректно работать, если одно из исходных полей пустое.
Должны быть учтены лимиты API
Не должно происходить зацикливания (бесконечной смены полей).

Стек
Необходимо при выполнении задачи использовать:
PHP (Желательно Laravel)
Официальную библиотеку для работы с amoCRM

На что обратить внимание:
Тест кейсы
Создание сделки с заполненным полем Бюджет и пустым полем Себестоимость
Обновление поля Бюджет у существующей сделки с заполненным полем себестоимость
Обновление поля себестоимость в значение превышающее бюджет у сделки с заполненным полем себестоимость
Импорт 50 сделок из файла со случайными значениями бюджета и себестоимости (в том числе и пустыми)


## Данные аккаунта
#### логин: ggff@gmail.com
#### пароль: Ggff__
Задание реализовано в два этапа, первый этап - авторизация по коду и получение токена доступа, реализован с использованием API из официальной документации по причине того, что на используемых хостингах не было возможности установить через SSH Composer для установки библиотеки php для работы с API, при загрузки вручную столкнулся с проблемой версии php на стороне хостинга, библиотека требовала 8.1+, а предоставляемый максимум был 7.4.
Второй этап начался с поиска бесплатного хостинга, удовлетворяющего требованиям. После того, как оной был найден, обработчики реализовал с использованием библиотеки. Саму папку vendor с библиотекой по понятным причинам не выгружаю


Так как авторизация настроена грубо (через конфиг, без использования фирменной кнопки(по причине слета со срока и первого этапа)), то продемонстрировать функционал созданного сайта не предоставляется возможным
Но оставляю данные от хостинга, возможно понадобится
#### логин: zhuravlevn
#### пароль: 6wcg6p7u17z-Kypi
[CP сайта](https://cp.sweb.ru/hosting/)
[Сайт](http://zhuravlevn.temp.swtest.ru/)

P.S. за сроки вышел по причине того, что забыл зарядку для ноутбука, уехав на выходные. 
