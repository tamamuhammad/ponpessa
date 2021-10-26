<div class="container-fluid ar-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-5">
                <div class="card ar-img-over mt-4">
                    <img class="card-img" src="<?= base_url() ?>assets/img/artikel/<?= $artikel['gambar'] ?>" alt="">
                    <div class="card-img-overlay">
                        <a href="#" class="d-flex align-items-center justify-content-center"><img src="assets/images/full-screen.png" alt=""></a>
                    </div>
                </div>
                <div class="row date-time mt-3">
                    <?php
                    $tgl = date("Y-M-d", strtotime($artikel['tgl']));
                    $tgl = explode("-", $tgl);
                    ?>
                    <div class="col text-right"><a href="#"> <i class="far fa-calendar-alt"></i> <?= $tgl[1] . ' ' .  $tgl[2] . ', ' . $tgl[0] ?> &nbsp; </a></div>
                </div>

                <h2><?= $artikel['judul'] ?></h2>
                <p class="text-justify"><?= $artikel['isi'] ?></p>
                <!-- 


                <div class="comment-form my-5 pt-5">
                    <h3>Add Comments</h3>
                    <hr class="ml-0" />
                    <table class="table table-borderless mt-4">
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Name" /></td>
                            <td><input type="email" class="form-control" placeholder="Email" /> </td>
                            <td><input type="url" class="form-control" placeholder="Website" /> </td>
                        </tr>
                        <tr>
                            <td colspan="3"><textarea class="form-control" placeholder="Your comment"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary float-right">Add Comment</button>
                            </td>
                        </tr>
                    </table>
                </div> -->
            </div>

            <div class="col-lg-3 pl-0">
                <div class="sidebar">

                    <h3 class="text-center mt-5">Trending Posts</h3>
                    <hr class="mx-auto" />
                    <div class="tranding-posts mt-4">
                        <?php
                        foreach ($trending as $t) :
                        ?>
                            <div class="media my-3">
                                <div class="d-flex align-items-center justify-content-center"><a href="#"><img src="<?= base_url() ?>assets/img/artikel/<?= $t['gambar'] ?>" width="100px" height="100px" style="object-fit: cover;"></a></div>
                                <div class=" media-body text-center d-flex align-items-center justify-content-center flex-column px-3">
                                    <a href="#"><?= $t['judul'] ?></a>
                                    <p class="mt-1"><?= $t['tgl'] ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>