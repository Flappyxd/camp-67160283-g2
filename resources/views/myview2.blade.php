@extends('template.default')
@section('title', 'MyView2')
@section('header1', 'MY VIEW2')
@section('content')
    <?php
    $myphp = "WOW PHP";
    echo "<h1>Hello PHP</h1>";
    ?>
    <h1><?php echo "Hello PHP2" ?></h1>
    <h1><?php printf("Hello PHP3") ?></h1>
    <h1>{{ "Hello PHP4" }}</h1>
    <h1><?= "Hello PHP5" ?></h1>

    <h1>this is my view 2</h1>
    <input type="text" id="myinput" value="input text value" />
    <button onclick="myfunc()" on>ตรวจสอบ</button>
    <button onclick="myfunc2()" on>ตรวจสอบ2</button>
    <button onclick="myfunc3()" on>ตรวจสอบ3</button>

@endsection

@push('scripts')
 <h1>my view 2 naja</h1>
 @endpush
 @push('scripts')
 <h1>my view 3 naja</h1>
 @endpush

 @push('scripts')
    @endpush
@push('scripts')
    <script>
        myvar = 1;
        console.log(myvar)
    </script>
    <script>
        myvar2 = "My Var 2";
        myvar2 = 2;
        console.log(myvar,myvar2);
        </script>
        <script>
            function myfunc(){
                console.log('myfunc called')
            }
            let myfunc2 = function(){
                console.log('myfunc2 called')
            }
            my func3 = () => console.log('myfunc3 called')
            function myfunc4(callback){
                console.log('myfunc4 called')
                callback()
            }
            console.log(document.getElementById('myinput'))
            </script>
    @endpush
