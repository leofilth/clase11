<div class="container">
    <h1>Clase 11 Pagination</h1>
    <h2>Lista de personas</h2>
    <ul>
    <?php
    foreach($datos as $dato)
    {
        ?>
        <li>
            <?php echo $dato->nombre."-".$dato->id?>
        </li>
    <?php
    }
    ?>
    </ul>
    <ul class="pagination">
        <li>
        <?php echo $this->pagination->create_links()?>
        </li>
    </ul>
</div>
