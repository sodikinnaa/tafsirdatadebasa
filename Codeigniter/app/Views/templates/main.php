<!-- MAIN SECTION -->
<main id="main" style="background-color:#243549;">

    <div class="container featured-area-default padding-top-20 padding-bottom-20" style="background-color:#243549">


        <style>
            @media screen and (max-width: 600px) {

                img {
                    width: 100%;
                    height: auto;

                }

                table {
                    border: 0;
                }

                table caption {
                    font-size: 1.3em;
                }

                table thead {
                    border: none;
                    clip: rect(0 0 0 0);
                    height: 1px;
                    margin: -1px;
                    overflow: hidden;
                    padding: 0;
                    position: absolute;
                    width: 1px;
                }

                table tr {
                    border-bottom: 3px solid #ddd;
                    display: block;
                    margin-bottom: .625em;
                }

                table td {
                    border-bottom: 1px solid #ddd;
                    display: block;
                    font-size: .8em;
                    text-align: right;
                }

                table td::before {
                    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
                    content: attr(data-label);
                    float: left;
                    font-weight: bold;
                    text-transform: uppercase;
                }

                table td:last-child {
                    border-bottom: 0;
                }
            }

            #popup {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.4);
            }

            .popup {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
            }

            @media (min-width: 601px) {
                .popup-content {
                    width: 500px;
                }
            }

            @media (min-width: 451px) and (max-width: 600px) {
                .popup-content {
                    width: 400px;
                }
            }

            @media (min-width: 354px) and (max-width: 450px) {
                .popup-content {
                    width: 300px;
                }
            }

            @media (max-width: 353px) {
                .popup-content {
                    max-width: 250px;
                }
            }

            .popup-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 0px;
                border-radius: 5px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
                /* border:1px  */
            }

            .close {
                position: absolute;
                top: -20px;
                right: -20px;
                padding-left: 7px;
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                border-radius: 50%;
                font-size: 35px;
                width: 30px;
                height: 30px;
                color: red !important;
                background-color: #fff !important;
            }

            /* .close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		} */
        </style>


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
                            <!-- <div class="article-info">
                                <div class="text-center">
                                    <a href="https://https://teknopedia.teknokrat..ac.id/" style="padding:10px;font-size:26;font-weight:bold">KLIK DISINI UNTUK MELIHAT PENGUMUMAN SBMPTN 2023</a>
                                </div>
                            </div> -->
                            <div class="article-content">
                                <div class="mw-parser-output">
                                    <?= $content ?>
                                    <hr>
                                    <div id="p-lang-btn" class="vector-dropdown mw-portlet mw-portlet-lang">
                                        <input type="checkbox" id="p-lang-btn-checkbox" role="button" aria-haspopup="true" data-event-name="ui.dropdown-p-lang-btn" class="vector-dropdown-checkbox mw-interlanguage-selector" aria-label="Pergi ke artikel dalam bahasa lain. Terdapat 335 bahasa">
                                        <label id="p-lang-btn-label" for="p-lang-btn-checkbox" class="vector-dropdown-label cdx-button cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--weight-quiet cdx-button--action-progressive mw-portlet-lang-heading-335" aria-hidden="true"><span class="vector-icon mw-ui-icon-language-progressive mw-ui-icon-wikimedia-language-progressive"></span>

                                            <span class="vector-dropdown-label-text">14 bahasa</span>
                                        </label>
                                        <div class="vector-dropdown-content">
                                            <div class="vector-menu-content">

                                                <ul class="vector-menu-content-list">
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://teknopedia.teknokrat.ac.id">Indonesia</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://en.teknopedia.teknokrat.ac.id">English</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://fr.teknopedia.teknokrat.ac.id">Français</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://jp.teknopedia.teknokrat.ac.id">日本語</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://de.teknopedia.teknokrat.ac.id">Deutsch</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://it.teknopedia.teknokrat.ac.id">Italiano</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://es.teknopedia.teknokrat.ac.id">Español</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://ru.teknopedia.teknokrat.ac.id">Русский</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://fa.teknopedia.teknokrat.ac.id">فارسی</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://pl.teknopedia.teknokrat.ac.id">Polski</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://zh.teknopedia.teknokrat.ac.id">中文</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://nl.teknopedia.teknokrat.ac.id">Nederlands</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://pt.teknopedia.teknokrat.ac.id">Português</a></li>
                                                    <li class="interlanguage-link interwiki-aa mw-list-item"><a href="https://ar.teknopedia.teknokrat.ac.id">العربية</a></li>
                                                </ul>
                                                <div class="after-portlet after-portlet-lang"><span class="wb-langlinks-edit wb-langlinks-link"><a href="https://www.wikidata.org/wiki/Special:EntityPage/Q5296#sitelinks-wikipedia" title="Sunting pranala interwiki" class="wbc-editpage">Sunting pranala</a></span></div>
                                            </div>

                                        </div>
                                    </div>
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
<script src="https://teknopedia.teknokrat.ac.id/assets/layout-front/js/jquery-2.2.4.min.js"></script>
<script src="https://teknopedia.teknokrat.ac.id/assets/layout-front/js/main.js"></script>
<script src="https://teknopedia.teknokrat.ac.id/assets/layout-front/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js"></script>
<script>
    //document.getElementByClassName("navbox").setAttribute("class", "table-responsive"); 
</script>