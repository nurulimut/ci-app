<div class="container">
    <h3 class="mt-3">List of peoples</h3>
    <div class="row">
        <div class="col-md-10"> 
            <form action="<?= base_url('peoples'); ?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search keyword" name="keyword" autocomplete="off" autofocus>
                    <input class="btn btn-primary" type="submit" name="submit"></input>
                </div>

            </form>         
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h5>Results : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Name</th> 
                       <th>Email</th> 
                       <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($peoples)):?>
                        <tr>
                            <td colspon="4">
                            <div class="alert alert-danger" role="alert">
                              data not found
                            </div>  
                            </td>
                        </tr>
                        <?php endif;
                    foreach( $peoples as $people) : ?>
                    <tr>
                        <th><?= ++$start; ?></th>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="" class="badge badge-warning">detail</a>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>


                        <?= $this->pagination->create_links(); ?>

        </div>
    </div>
    </div>
</div>