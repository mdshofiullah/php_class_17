<?php include 'header.php';?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-secondary">
                    <div class="card-header text-center bg-warning">
                        <h4>Please Input File</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)) { ?>
                            <h2 class="text-center font-weight-bolder text-success"><?php echo $message; ?></h2>
                        <?php } ?>

                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-whitetext-center text-white">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-white">Author Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author_name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-white">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control" id="" cols="" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label text-center text-white">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control-file" name="image"  />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-success" value="Save" name="btn" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php';?>
