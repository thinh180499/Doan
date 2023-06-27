<h1>thêm lý thuyết</h1>
@if($errors->any())
    <div style="color: red;">Dữ liệu nhập vào không hợp lệ</div>
@endif
<form action="themlythuyet" method="post">
    @csrf
    <div>
        <label>tên lý thuyết</label>
        <input type="text" name="tenlythuyet" placeholder="nhập tên lý thuyết" value="{{old{'tenlythuyet'}}}">
        @error('tenlythuyet')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label>nội dung</label>
        <input type="text" name="noidung" placeholder="nhập nội dung" value="{{old{'noidung'}}}">
        @error('noidung')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label>công thức</label>
        <input type="text" name="congthuc" placeholder="nhập công thức" value="{{old{'congthuc'}}}">
        @error('congthuc')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label>môn</label>
        <input type="text" name="mon" placeholder="nhập môn" value="{{old{'mon'}}}">
        @error('mon')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <button type="submit">thêm mới</button>
    <a href="<?php echo route('admin.danhsachlythuyet'); ?>">quay lại</a>
</form>