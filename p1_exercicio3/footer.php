<div class="clearfix"></div>

        </div>
        <div id="footer">
            <p>Empresa Reysoft - Todos os direitos reservados -
            <?php
                if(isset($_GET['page']))
                    echo "Usuário acessou a página ".$_GET['page'];
                else
                    echo "Usuário acessou a  página home";
            ?>
            </p>
        </div>
    </body>
</html>