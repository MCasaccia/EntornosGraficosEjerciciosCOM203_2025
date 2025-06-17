
<?php
    if(isset($_POST["tipo"])){
        $tipo = $_POST["tipo"];
        setcookie("tipoCookie", $tipo, time() + 60 * 60 * 24 * 90,'/');
    }
    else{
        if(isset($_COOKIE["tipoCookie"])){
            $tipo = $_COOKIE["tipoCookie"];
        }
        else{
            $tipo = null;
        }

    }
?>
<html>
    <head></head>
    <body>
        <img src="https://imgs.search.brave.com/Bh-rqqp_sL5_hnUeMYAMEuy50JTcggrbUExGZKBO3U8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9icmFu/ZGxvZ29zLm5ldC93/cC1jb250ZW50L3Vw/bG9hZHMvMjAxMy8w/OC9jbGFyaW4tZXBz/LXZlY3Rvci1sb2dv/LTQwMHg0MDAucG5n" alt="logo de clarin">
        <form action="principal.php" method="post">
            Que tipo de noticias desea ver?
            <br>
            <input type="radio" value="economia" name="tipo"> Economicas <br>
            <input type="radio" value="politica" name="tipo"> Politicas <br>
            <input type="radio" value="deporte" name="tipo"> Deportivas <br>
            <input type="submit" name="Seleccionar">
        </form>
        <br>
        <a href="reinicioCookie.php">Reiniciar titulares</a>
        <?php
        if($tipo == null){
            echo '
                <div>
                <img src="https://imgs.search.brave.com/ehXBzZrkuR5jKKnIrdoS5r5NElVX8MmOBtY95UEk_dQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDMv/NTMzLzk5Ni9zbWFs/bC9jb2lucy1mYWxs/aW5nLWluLXNsb3ct/bW90aW9uLXNob3Qt/b24tcGhhbnRvbS1m/bGV4LTRrLWF0LTEw/MDAtZnBzLXZpZGVv/LmpwZw" alt="Imagen de monedas y billetes" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa economica</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
                <br>
                <div>
                <img src="https://imgs.search.brave.com/7gWqwu9Ci4WpORJOCYER84YMPndQ6-L6rdfv6RWm-Ko/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTA5/Njg2MjgzL2VzL2Zv/dG8vY2FzYS1yb3Nh/ZGEuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPUtlZ3dlYTBI/cnFmMXN0Q3RXNW54/WldnYU92OVA4djNr/R04xLWJRNHItalE9" alt="casa rosada" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa politica</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
                <br>
                <div>
                <img src="https://imgs.search.brave.com/gIciNs2z6YklbWteWU6zQBwpAL1JxjlE5-CBZBOSPls/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9yZXNp/emVyLmdsYW5hY2lv/bi5jb20vcmVzaXpl/ci92Mi9lbC1leHRy/YW5vLWdlc3RvLWRl/bC10b2JpbGxvLWRl/LWxpb25lbC1tZXNz/aS1KVlJaR0FBQ01K/Q0RWSTJBQktZNVJH/RUVBQS5qcGc_YXV0/aD1lOTRhMGNmZDBm/MGI1ZTVhNzVmZGI1/OWU4MjQzZGRiOTc0/MjhjOTg4ZTMzNzc5/YzU3YTk1NGVkODIw/MGIyYTY4JndpZHRo/PTQyMCZoZWlnaHQ9/MjgwJnF1YWxpdHk9/NzAmc21hcnQ9dHJ1/ZQ" alt="Imagen de messi" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa deportiva</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
            ';
        }
        if($tipo == "politica"){
            echo '
                <div>
                <img src="https://imgs.search.brave.com/7gWqwu9Ci4WpORJOCYER84YMPndQ6-L6rdfv6RWm-Ko/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTA5/Njg2MjgzL2VzL2Zv/dG8vY2FzYS1yb3Nh/ZGEuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPUtlZ3dlYTBI/cnFmMXN0Q3RXNW54/WldnYU92OVA4djNr/R04xLWJRNHItalE9" alt="casa rosada" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa politica</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
            ';
        }
        if($tipo == "economia"){
            echo '
                <div>
                <img src="https://imgs.search.brave.com/ehXBzZrkuR5jKKnIrdoS5r5NElVX8MmOBtY95UEk_dQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wMDMv/NTMzLzk5Ni9zbWFs/bC9jb2lucy1mYWxs/aW5nLWluLXNsb3ct/bW90aW9uLXNob3Qt/b24tcGhhbnRvbS1m/bGV4LTRrLWF0LTEw/MDAtZnBzLXZpZGVv/LmpwZw" alt="Imagen de monedas y billetes" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa economica</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
            ';
        }
        if($tipo == "deporte"){
            echo '
                <div>
                <img src="https://imgs.search.brave.com/gIciNs2z6YklbWteWU6zQBwpAL1JxjlE5-CBZBOSPls/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9yZXNp/emVyLmdsYW5hY2lv/bi5jb20vcmVzaXpl/ci92Mi9lbC1leHRy/YW5vLWdlc3RvLWRl/bC10b2JpbGxvLWRl/LWxpb25lbC1tZXNz/aS1KVlJaR0FBQ01K/Q0RWSTJBQktZNVJH/RUVBQS5qcGc_YXV0/aD1lOTRhMGNmZDBm/MGI1ZTVhNzVmZGI1/OWU4MjQzZGRiOTc0/MjhjOTg4ZTMzNzc5/YzU3YTk1NGVkODIw/MGIyYTY4JndpZHRo/PTQyMCZoZWlnaHQ9/MjgwJnF1YWxpdHk9/NzAmc21hcnQ9dHJ1/ZQ" alt="Imagen de messi" style="width=100%; border-radius: 5px 5px 0 0;">
                <div style="padding: 2px 16px;">
                <h4><b>Cosa deportiva</b></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>
                </div>
            ';
        }
        unset($_POST['tipo']);
        ?>
    </body>
</html>