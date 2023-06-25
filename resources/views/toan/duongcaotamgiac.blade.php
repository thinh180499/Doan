@extends('layouts.layout')

@section('content')
    <form action="duongcaotamgiac" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính đường cao của một tam giác h=2*&#40;&#8730&#40;p*&#40;p-a;&#41;*&#40;p-b&#41;*&#40;p-c&#41;&#41;/a:&#40;trong đó:p=&#40;a+b+c&#41;/2&#41;</div>
        <table>
            <tr>
                <td>cạnh a</td>
                <td><input type="text" name="a" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>cạnh b</td>
                <td><input type="text" name="b" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>cạnh c</td>
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
