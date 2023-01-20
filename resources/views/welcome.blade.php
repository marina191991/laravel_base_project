<htmt>
    <head>

    </head>
    <body>

    <form method="post" action="/result" >
        @csrf
        Введите число 1 <br>
        <input type="text" name="value1"><br>
        Введите число 2<br>
        <input type="text" name="value2"><br><br>
       <select name="action_is_arithmetic" >
           <option selected>выберите арифметическое действие</option>
           <option value="addition">сложение </option>
           <option value="subtraction">вычитание </option>
           <option value="multi">умножение </option>
           <option value="division">деление </option>
       </select>
        <br>
        <br>
        <button type="submit"> Получить результат</button>
    </form>

    </body>
</htmt>
