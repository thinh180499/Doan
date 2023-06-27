
<h1>Login</h1>
@if(!empty($msr))
    <div style="color: red;">{{$msr}}</div>
@endif
<form action="#" method="post">
    @csrf
    <div>
        <label>tên admin</label>
        <input type="text" name="adminname" placeholder="nhập tên admin" value="{{old('adminnane')}}">
        @error('adminname')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label>password</label>
        <input type="text" name="password" placeholder="nhập password" value="{{old('password')}}">
        @error('password')
            <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <button type="submit">login</button>
    <a href="<?php echo route('home'); ?>">quay lại</a>
</form>