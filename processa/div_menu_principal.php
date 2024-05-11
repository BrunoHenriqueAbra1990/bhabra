

<div class="content " >
    Menu Principal
</div>

<div class="sub_conteudo">
    <div class="form-row col-md-12 menu_opcoes">
        <?php
            include "../bd/conectar.php"; 
            $sql = "Select * FROM opcoes_menu";
            $query = $con->query($sql);
            while ($dado = $query->fetch_assoc()) {
                $nome_menu	= $dado['nome_menu'];
                $id_opcoes_menu	= $dado['id_opcoes_menu'];
        ?>
            <div class="col-md-2 contorno">
                <b onclick="Mudarestado('div<?php echo $nome_menu;?>')"><?php echo $nome_menu;?></b>
                <div id="div<?php echo $nome_menu;?>" class="sub_menu_opcoes" style='display: none;' >
                    <ul>
                        <?php
                            $sql_sub = "Select * FROM opcoes_sub_menu where fk_id_menu = '$id_opcoes_menu'	";
                            $query_sub = $con->query($sql_sub);
                            while ($dado_sub = $query_sub->fetch_assoc()) {
                            $nome_sub_menu	= $dado_sub['nome_sub_menu'];
                        ?>
                        <li><?php echo $nome_sub_menu;?></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>