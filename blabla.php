<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Responsivo | GN</title>
    <style>
        :root{
            --color-white: #fff;
            --color-dark1: rgb(39, 39, 39);
            --color-dark2: #2d2d2d;
            --color-dark3: #414141;
            --color-dark4: #1c1c1c;
            --color-dark5: #343434;
            --color-purple: #b040ff;
        }
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: var(--color-dark1);
            color: var(--color-white);
        }

        img {
            width: 225px;
        }


    /* .img_logo_header{
            width: 45px;
        } */
        .header,
        .navigation_header{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .header{
            background-color: var(--color-dark2);
            justify-content: space-between;
            padding: 0 10%;
            height: 5em;
            box-shadow: 1px 1px 4px var(--color-dark4);
        }
        .navigation_header{
            gap: 5px;
            z-index: 2;
        }
        .content{
            padding-top: 5em;
            text-align: center;
            height: 100vh;
            transition: 1s;
        }
        .navigation_header a{
            text-decoration: none;
            color: var(--color-purple);
            transition: 1s;
            font-weight: bold;
        }
        .navigation_header a:hover{
            color: var(--color-white);
        }
        .active{
            background: var(--color-dark3);
            padding: 10px;
            border-radius: 10px;
        }
        .btn_icon_header{
            background: transparent;
            border: none;
            color: var(--color-white);
            cursor: pointer;
            display: none;
        }
        @media screen and (max-width: 768px) {
            .navigation_header{
                position: absolute;
                flex-direction: column !important;
                top: 0;
                background: var(--color-dark5);
                height: 100%;
                width: 35vw;
                padding: 1em;
                animation-duration: 1s;
                margin-left: -100vw;
            }
            .btn_icon_header{
                display: block;
            }
        }
        @keyframes showSidebar {
            from {margin-left: -100vw;}
            to {margin-left: -10vw;}
        }
    </style>
</head>
<body id="body">
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <!-- <div class="logo_header">
            <img src="logo_gn.png" alt="Logo GN" class="img_logo_header">
        </div> -->
        <div class="navigation_header" id="navigation_header">
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>

            <a href="https://www.ceara.gov.br/"><img src="img/logo-governo.svg" alt="Logo do Governo do Ceará"></a>
            <a href="https://www.instagram.com/eeepmanoelmano/"><img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>

            <div class="btn-group" role="group">
                       
                           
                <a href="grafics2.php" class="btn btn-success" style="margin-left: 230px;">Relatórios</a>
                      
            </div>
            <!-- <a href="#" class="active">Home</a>
            <a href="#">Cursos</a>
            <a href="#">Sobre nós</a>
            <a href="#">Contato</a> -->
        </div>
    </div>
    <div tabindex="0" class="content" onfocus="closeSidebar()" id="content">
        <h1>Menu Responsivo - Gustavo Neitzke</h1>
    </div>
</body>
<script>
    var header           = document.getElementById('header');
    var navigationHeader = document.getElementById('navigation_header');
    var content          = document.getElementById('content');
    var showSidebar      = false;

    function toggleSidebar()
    {
        showSidebar = !showSidebar;
        if(showSidebar)
        {
            navigationHeader.style.marginLeft = '-10vw';
            navigationHeader.style.animationName = 'showSidebar';
            content.style.filter = 'blur(2px)';
        }
        else
        {
            navigationHeader.style.marginLeft = '-100vw';
            navigationHeader.style.animationName = '';
            content.style.filter = '';
        }
    }

    function closeSidebar()
    {
        if(showSidebar)
        {
            showSidebar = true;
            toggleSidebar();
        }
    }

    window.addEventListener('resize', function(event) {
        if(window.innerWidth > 768 && showSidebar) 
        {  
            showSidebar = true;
            toggleSidebar();
        }
    });

</script>
</html>



