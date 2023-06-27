<h1>thêm lý thuyết</h1>
<form action="themlythuyet" method="post">
    @csrf
    <div>
        <label>tên lý thuyết</label>
        <input type="text" name="tenlythuyet" placeholder="nhập tên lý thuyết">
          
    </div>
    <div>
        <label>nội dung</label>
        <input type="text" name="noidung" placeholder="nhập nội dung">
          
    </div>
    <div>
        <label>công thức</label>
        <input type="text" name="congthuc" placeholder="nhập công thức">
          
    </div>
    <div>
        <label>môn</label>
        <input type="text" name="mon" placeholder="nhập môn">
          
    </div>

    <button type="submit">thêm mới</button>
    <a href="<?php echo route('admin.danhsachlythuyet'); ?>">quay lại</a>
</form>