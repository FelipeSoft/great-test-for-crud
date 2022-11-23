<style>
    #acceptExit a{
        color: var(--default-color--01); 
        text-decoration: none;
    }
    #acceptExit{
        padding: 4px 8px;
        background-color: var(--default-color--02);
        color: var(--default-color--02);
        font-size: 0.9em;
        border: 1px solid var(--default-color--01);
        font-weight: var(--light);
        margin-top: 20px;
        cursor: pointer;;
    }
    #cancelExit{
        padding: 4px 8px;
        background-color: var(--primary-color);
        color: var(--default-color--02);
        font-size: 0.9em;
        border: none;
        font-weight: var(--light);
        margin-top: 20px;
        margin-right: 8px; 
        cursor: pointer;
    }
</style>
<div id="exitModal">
<div class="modal">
    <div class="boxModal">
        <h3>Atenção!</h3>
        <p>Deseja encerrar a sessão?</p>
        <div class="buttonModal">
            <button id="cancelExit">Cancelar</button>
            <button id="acceptExit"><a href="./actions/exit_user.php">Encerrar</a></button>
        </div>
    </div>
</div>
</div>