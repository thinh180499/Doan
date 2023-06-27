<h1>Danh sách lý thuyết</h1>

<table >
<a href="<?php echo route('admin.themlythuyet'); ?>">thêm lý thuyết</a>
    <thead>
        <tr>
            <th>id lý thuyết</th>
            <th>tên lý thuyết</th>
            <th>nội dung</th>
            <th>công thức</th>
            <th>môn</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($dslythuyet))
            @foreach ($dslythuyet as $key => $item)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$item->tenlythuyet}}</td>
            <td>{{$item->noidung}}</td>
            <td>{{$item->congthuc}}</td>
            <td>{{$item->mon}}</td>
        </tr>
            @endforeach
        @else
        <tr>
            <td>không có lý thuyết</td>
        </tr>
        @endif
    </tbody>
</table>