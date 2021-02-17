@extends("templates.template")

@section("Content")
    <style>
        .titulo {
            position: absolute;
            top: 8px;
            margin-left: 2%;
            font-size: 8vw;
            color: whitesmoke;
            font-family: 'Open Sans Condensed', sans-serif;
        }
    </style>
    <img src="{{url("img/pizza.jpg")}}"
         style="width: 100%"
         class="img-fluid" alt="...">
    <h3 class="titulo">Pizzaria & Cia</h3>
@endsection()



@section("footer")
    <style>
        .footer {
            font-family: 'Teko', sans-serif;
            position: fixed;
            bottom: 0;
            padding: 10px;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            font-size: 85%;
        }
    </style>
    <div class="footer">
        <a style="float: right;font-size: 50%;color: white"
           href="https://www.linkedin.com/in/miguel-pereira-da-silva-687681107/" target="_blank">
            @MiguelProgrammer
        </a>
        <div class="d-flex justify-content-center">
            &copy; <?=date("Y")?>
            Pizzaria & Cia delivery
        </div>
    </div>
@endsection()
