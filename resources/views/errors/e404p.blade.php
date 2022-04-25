<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error 404</title>
  <link rel="stylesheet" href="style.css">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Merienda:wght@700&family=Open+Sans+Condensed:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Merienda:wght@700&family=Open+Sans+Condensed:wght@300&display=swap');    
* {
  margin: 0;
  padding: 0;
}
body{
    background-color: #0B0B3B;
    font-family: 'Lobster', cursive;
    font-weight:280;
}
#title {
    text-align:center;
    font-size:25px;
    margin-top:0;
    margin-bottom:-5px;
    position:relative;
    color:#0B0B3B;
    }
#contenedor{
    width: 100%;
    overflow: hidden;
}
#caja1{
    width: 100%;
    height: 115px;
    background-color: transparent;
    
}
#caja2{
    width: 45%;
    height: 450px;
    background-color:#fff;
    float: left;
    overflow: hidden;
}
#caja3{
    width: 55%;
    height: 450px;
    float: right;
    background-color: #fff;
    overflow: hidden;
}
#caja4{
    width: 100%;
    height: 250px;
    background-color: transparent;
}
.circles:after {
    content:'';
    display:inline-block;
    width:100%;
    height:100px;
    background:#fff;
    position:absolute;
    left:0;
    }

    .circles { 
        background:#fff;
        text-align: center;
        position: relative;
    }

    .circles p {
        font-size: 150px;
        color: #0B0B3B;
        position: relative;
    z-index: 9;
    line-height: 100%;
    }

    .circles p small { 
    font-size: 40px; 
    line-height: 100%; 
    vertical-align: top;   
    }

    .circles .circle.small {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #EEBA48;
        position: absolute;
        z-index: 1;
        top: 80px;
        left: 50%;
        animation: 7s smallmove infinite cubic-bezier(1,.22,.71,.98);	
        -webkit-animation: 7s smallmove infinite cubic-bezier(1,.22,.71,.98);
        animation-delay: 1.2s;
        -webkit-animation-delay: 1.2s;
    }


    .circles .circle.med {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background:#adfa87;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 10%;
        animation: 7s medmove infinite cubic-bezier(.32,.04,.15,.75);	
        -webkit-animation: 7s medmove infinite cubic-bezier(.32,.04,.15,.75);
        animation-delay: 0.4s;
        -webkit-animation-delay: 0.4s;
    }

    .circles .circle.big {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: #fc4893;
        position: absolute;
        z-index: 1;
        top: 250px;
        right: 0;
        animation: 8s bigmove infinite;	
        -webkit-animation: 8s bigmove infinite;
        animation-delay: 3s;
        -webkit-animation-delay: 1s;
    }
@-webkit-keyframes smallmove {
    0% { top: 10px; left: 45%; opacity: 1; }
    25% { top: 300px; left: 40%; opacity:0.7; }
    50% { top: 240px; left: 55%; opacity:0.4; }
    75% { top: 100px; left: 40%;  opacity:0.6; }
    100% { top: 10px; left: 45%; opacity: 1; }
}
@keyframes smallmove {
    0% { top: 10px; left: 45%; opacity: 1; }
    25% { top: 300px; left: 40%; opacity:0.7; }
    50% { top: 240px; left: 55%; opacity:0.4; }
    75% { top: 100px; left: 40%;  opacity:0.6; }
    100% { top: 10px; left: 45%; opacity: 1; }
}

@-webkit-keyframes medmove {
    0% { top: 0px; left: 20%; opacity: 1; }
    25% { top: 300px; left: 80%; opacity:0.7; }
    50% { top: 240px; left: 55%; opacity:0.4; }
    75% { top: 100px; left: 40%;  opacity:0.6; }
    100% { top: 0px; left: 20%; opacity: 1; }
}

@keyframes medmove {
    0% { top: 0px; left: 20%; opacity: 1; }
    25% { top: 300px; left: 80%; opacity:0.7; }
    50% { top: 240px; left: 55%; opacity:0.4; }
    75% { top: 100px; left: 40%;  opacity:0.6; }
    100% { top: 0px; left: 20%; opacity: 1; }
}

@-webkit-keyframes bigmove {
    0% { top: 0px; right: 4%; opacity: 0.5; }
    25% { top: 100px; right: 40%; opacity:0.4; }
    50% { top: 240px; right: 45%; opacity:0.8; }
    75% { top: 100px; right: 35%;  opacity:0.6; }
    100% { top: 0px; right: 4%; opacity: 0.5; }
}
@keyframes bigmove {
    0% { top: 0px; right: 4%; opacity: 0.5; }
    25% { top: 100px; right: 40%; opacity:0.4; }
    50% { top: 240px; right: 45%; opacity:0.8; }
    75% { top: 100px; right: 35%;  opacity:0.6; }
    100% { top: 0px; right: 4%; opacity: 0.5; }
}
a {
    background-color: #0B0B3B;
    -webkit-text-decoration-skip: objects;
}
button,
            input {
                font-family: 'Lobster', cursive;
                font-size: 100%;
                line-height: 1.15;
                margin: 0;
            }

            button,
            input {
                overflow: visible;
            }

            button {
                text-transform: none;
            }

            button,
            html [type="button"],
            [type="reset"],
            [type="submit"] {
                -webkit-appearance: button;
            }

            button::-moz-focus-inner,
            [type="button"]::-moz-focus-inner,
            [type="reset"]::-moz-focus-inner,
            [type="submit"]::-moz-focus-inner {
                border-style: none;
                padding: 0;
            }

            button:-moz-focusring,
            [type="button"]:-moz-focusring,
            [type="reset"]:-moz-focusring,
            [type="submit"]:-moz-focusring {
                outline: 1px dotted ButtonText;
            }

            
            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }

            [type="search"]::-webkit-search-cancel-button,
            [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }

            
            button {
                background: #0B0B3B;
                padding: 0;
            }

            button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }

            *,
            *::before,
            *::after {
                border-width: 0;
                border-style: solid;
                border-color: #dae1e7;
            }

            button,
            [type="button"],
            [type="reset"],
            [type="submit"] {
                border-radius: 0;
            }

            button,
            input {
                font-family: inherit;
            }

            input::-webkit-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input:-ms-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input::-ms-input-placeholder {
                color: inherit;
                opacity: .5;
            }

            input::placeholder {
                color: inherit;
                opacity: .5;
            }

            button,
            [role=button] {
                cursor: pointer;
            }

            .bg-transparent {
                background-color:#fff;
            }      
          
            .text-grey-darkest {
                color: #fdfdfd;
            }

            .uppercase {
                text-transform:capitalize;
            }


            .tracking-wide {
                letter-spacing: .05em;
            }
            .py-3 {
                padding-top: .65rem;
                padding-bottom: .65rem;
            }

            .px-6 {
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }
            .rounded-lg {
                border-radius: .5rem;
            }

            .border-2 {
                border-width: 2px;
            }
            .border-grey-light {
                border-color: #dae1e7;
            }
            .hover\:border-grey:hover {
                border-color: #b8c2cc;
                background-color: #fc4893;
            }
  </style>
</head>
<body >
    <div id="contenedor">
        <div id="caja1">
        </div>  
        <div id="caja2">
            <br><br>
            @yield('image')
           <div id="title"><br>
            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
            <button style="color: #0b0b3b;" class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg center-block">
                {{ __('Inicio') }}
            </button>
            </a>
            </div>
        </div> 
        <div id="caja3">
            
            <div class="circles">
                <h1 style="font-size: 100px; color: chocolate;">Upss</h1>
                <p>404<br>
                 <small>Esta Página No Esta Disponible</small>
                 
                </p>
                
                <span class="circle big"></span>
                <span class="circle med"></span>
                <span class="circle small"></span>
            </div>
            
        </div> 
        <div id="caja4">
        </div> 
    </div>
    
</body>
</html>