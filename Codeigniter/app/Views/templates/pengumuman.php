<!-- MAIN SECTION -->
<main id="main" style="background-color:#243549;">

    <div class="container featured-area-default padding-top-20 padding-bottom-20" style="background-color:#243549">




        <div class="row">

            <!-- SIDEBAR STUFF -->
            <?php include "sidebar.php"; ?>
            <!-- END SIDEBAR STUFF -->
            <div class="col-md-9 ">

                <div class="row">
                    <div class="col-md-12 ">
                        <!-- BREADCRUMBS -->
                        <?php include "search.php"; ?>
                        <!-- END BREADCRUMBS -->
                        <!-- ARTICLES -->



                        <script>
                            document.getElementById('url-form').addEventListener('submit', function(e) {
                                e.preventDefault();
                                var urlInput = document.getElementById('url_input').value;
                                var url = '/wiki/' + urlInput.split(' ').join('_');
                                window.location.href = url;
                            });
                        </script>
                        </script>

                        <div class="panel panel-default shadowku" id="portal-utama">
                            <div class="article-heading margin-bottom-5">
                                <a href="#"><?= $title ?></a>
                            </div>

                            <div class="article-content">
                                <div class="mw-parser-output">
                                    Isi Pengumuman disisni
                                </div>

                            </div>
                        </div>

                        <!-- END ARTICLES -->
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>
<!-- END MAIN SECTION -->
<script src="https://p2k.stekom.ac.id/assets/layout-front/js/jquery-2.2.4.min.js"></script>
<script src="https://p2k.stekom.ac.id/assets/layout-front/js/main.js"></script>
<script src="https://p2k.stekom.ac.id/assets/layout-front/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js"></script>