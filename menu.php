
<!-- MENU -->
<style type="text/css">
    @import "estilos/style_menu.css";  
</style>
<!-- MENU -->

<script src="composer/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script src="composer/ajax/jszip.min.js"></script>

<div class="wrapper">
<!-- Sidebar  -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h3>Menu </h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="https://escritoriovotuporanga.xyz/">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>

            <?php
                include "bd/conectar.php"; 
                $sql = "Select * FROM opcoes_menu";
                $query = $con->query($sql);
                while ($dado = $query->fetch_assoc()) {
                    $nome_menu	= $dado['nome_menu'];
                    $id_opcoes_menu	= $dado['id_opcoes_menu'];
            ?>
                <li>
                    <a href=""><i class="fas fa-bars"></i>
                        <b><?php echo $nome_menu;?></b>
                    </a>
                </li>
            <?php
                }
            ?>
        </ul>
    </nav>
</div>
<!-- Page Content  -->

<div class="container-fluid">
    <button type="button" id="sidebarCollapse" class="btn btn-info" >
        <i class="fas fa-bars fa-2x"></i>
    </button>
</div>

<div class="overlay"></div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
