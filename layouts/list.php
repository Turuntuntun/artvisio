<table>
    <tr>
        <th>Автор</th>
        <th>Год</th>
        <th>Название</th>
        <?foreach ($vars as $key => $value) :?>
        <tr>
            <td><?=$value['author'];?></td>
            <td><?=$value['year'];?></td>
            <td><?=$value['name'];?></td>
        </tr>
    <?endforeach;?>
    </tr>
</table>