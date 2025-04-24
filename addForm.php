<?php
include "functions.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма добавления</title> 
    </head>
    <body> 
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="fio">ФИО</label>
                        <div>
                            <input id="fio" type="text" name="fio"/>
                        </div>
                    </div>
                    <div>
                        <label for="passport">Паспорт</label>
                        <div>
                            <input id="passport" type="text" name="passport"/>
                        </div>
                    </div>
                    <div>
                        <label for="visa">Виза</label>
                        <div>
                            <input id="visa" type="text" name="visa"/>
                        </div>
                    </div>
                    <div>
                        <label for="status">Статус визы</label>
                        <div>
                            <input id="status" type="text" name="status"/>
                        </div>
                    </div>
                    <div>
                        <label for="dateVisa">Дата визы</label>
                        <div>
                            <input id="dateVisa" type="text" name="dateVisa"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
<html></html>