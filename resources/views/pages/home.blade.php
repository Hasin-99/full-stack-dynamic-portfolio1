@extends('layouts.main')

@section('content')
    <form action="#">
        <input type="number" class="input-field" id="num1" placeholder="Enter a number"> 
        <br><br>
        <input type="number" class="input-field" id="num2" placeholder="Enter another number"> 
        <br><br>
        <div id="operators">
        <input type="button" class="btn btn-primary" value=" + " >
        <input type="button" class="btn btn-primary" value=" - ">
        <input type="button" class="btn btn-primary" value=" / " >
        <input type="button" class="btn btn-primary" value=" * ">
    </form>

    <div style= display:flex;>
        <h1>Output:</h1>
        <div id="result" style="font-size: 30px; font-weight: bold;"></div>
    </div>

    <script>
        var buttons = document.getElementById('operators');
        buttons.addEventListener('click',function(btn){
        let operator =btn.target.defaultValue; 
        let num1 = Number(document.getElementById('num1');
        let num2= Number(document.getElementById('num2');
        let result =0; 
        if(operator =='+'){ 
        result= num1 +num2; 
        } else if(operator =='-') {
        result = num1 -num2; 
        } else if(operator =='x'){ 
        result = num1 *num2; 
        } else if(operator =='/'){ 
        result = num1 /num2; 
        } else { 
        result ="Invalid"; 
        }
        document.getElementsById('result').innerHTML = "<h1>" + result + "</h1>";
    </script>
@endsection