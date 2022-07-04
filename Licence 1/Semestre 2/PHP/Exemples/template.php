
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Crédit</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($modules as $k =>  $module) : ?>
                <tr>
                    <td scope="row"><?php echo $module['id']?></td>
                    <td scope="row"><?php echo $module['nom']?></td>
                    <td scope="row"><?php echo $module['credit']?></td>
                    
                </tr>
            <?php endforeach;?>
        </tbody>
</table>