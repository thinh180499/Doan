@extends('layouts.layout')

@section('content')
    <form action="thuongcuahailuythuacungcoso" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>Tính thương của hai lũy thừa với cùng một cơ số:a^n/a^m</div>
       
        <table>
            <tr>
                <td>cơ số a:</td>
                <td><input type="text" name="a" value="<?php if(isset($a)){ if(is_numeric($a)){echo $a;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>mũ n</td>
                <td><input type="text" name="b" value="<?php if(isset($b)){ if(is_numeric($b)){echo $b;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
                <td>mũ m</td>
                <td><input type="text" name="c" value="<?php if(isset($c)){ if(is_numeric($c)){echo $c;}else{false;} }else{false;} ?>" /></td>
            </tr>
            <tr>
            <td></td>
            <td><button type="submit">=</button></td>
            </tr>
            
            </table>
                <?php if(isset($ketqua)){echo $ketqua;}else{false;} ?>
       
        
       
    </form>
@endsection
