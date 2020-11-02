<table>
    <tr>
        <th>Автор</th>
        <th>Год</th>
        <th>Название</th>
        <th></th>
        <?foreach ($vars as $key => $value) :?>
            <form method="get" id = "form<?=$key?>"></form>
            <input type="hidden" value=" <?=$value['id'];?>" form = "form<?=$key?>" name="id">
            <tr>
                <td><input value=" <?=$value['author'];?>" form = "form<?=$key?>" name="author"></td>
                <td><input value=" <?=$value['year'];?>" form = "form<?=$key?>" name="year"></td>
                <td><input value=" <?=$value['name'];?>" form = "form<?=$key?>" name="name"></td>
                <td><input type="submit" value="Изменить" form = "form<?=$key?>" name="submit"></td>
            </tr>
        <?endforeach;?>
    </tr>
</table>
