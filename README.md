# PSR-3: Logger Interface

<h2> Описание </h2>
<p>
  Для логирования данных. Реализует PSR-3: Logger Interface.
</p>
<h2>Установка</h2>

<p>
Скачать ZIP архив или склонировать проект к себе. Подключить класс LoggerService.php в проект либо подключить автозагрузку пространства имен (namespace)
</p>

<h2>Использование</h2>

### Вызов через экземпляр класса

```php
    <?php 
    // Вызвать экземпляр класса
    $obLogger = new LoggerService();
    // Установить путь для сохранения логов
    $obLogger->setPatch($_SERVER['DOCUMENT_ROOT'] . '/upload/log/{Папка_при_желании}');
    // Ваши данные для лога. Для примера указан массив
    $obLogger->notice($array); 
    ?>
```

Реализованы методы стандарта PSR-3: Logger Interface


## Описание класса
- LoggerService
    - makeFolder
    - setPatch
    - emergency
    - critical
    - error
    - warning
    - notice
    - info
    - debug
    - log
