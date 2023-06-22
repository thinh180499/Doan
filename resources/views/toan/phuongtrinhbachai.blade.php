@extends('layouts.layout')

@section('content')
    <form action="phuongtrinhbachai" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div>giải phương trình bậc 2: a*x2+b*x+x=0</div>
        <table>
            <tr>
                <td>Hệ số bậc 2, a</td>
                <td><input type="text" name="a" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>Hệ số bậc 1, b</td>
                <td><input type="text" name="b" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>Hệ số tự do, c</td>
                <td><input type="text" name="c" value="<?php if(isset($c)){ if(is_numeric($c)){echo $c;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
            <td></td>
            <td><button type="submit">kết quả</button></td>
            </tr>
            
            </table>
                <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
    </form>
@endsection