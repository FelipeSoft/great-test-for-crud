<div id="login">
<div class="modal">
    <div class="boxModal">
        <h3>Atenção!</h3>
        <p><?php
            if(!empty($_SESSION['warning'])){
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
            }
        ?></p>
        <div class="buttonModal">
            <button id="closeModal">Fechar</button>
        </div>
    </div>
</div>
</div>