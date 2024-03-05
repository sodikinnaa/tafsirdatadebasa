<div class="breadcrumb-container shadowku" style="border-radius:5px;border:1px solid #ffffff">
    <ol class="breadcrumb" style="margin:0px">
        <li>
            <a href="<?php echo base_url() . "wiki"; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                </svg>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url() ?>" class="active"><?= ENSIKLOPEDIA ?></a>
        </li>
        <li>
            <a href="#" class="active"><?= $title ?></a>
        </li>
    </ol>
</div>

<div class="" style="margin-bottom:20px;border-radius:5px;border:1px solid #fff;padding:10px">
    <form id="url-form" class="form-inline">
        <div class="row">
            <div class="col-sm-10">
                <input type="text" id="url_input" required name="search_query" style="width:100%;height:40px;font-size:18px" class="form-control" placeholder="<?= CARIALLBAHASA ?>">
            </div>
            <div class="col-sm-2">
                <button type="submit" style="width:100%;height:40px;font-size:18px" class="btn btn-primary mb-2"><?= SEARCH ?></button>
            </div>
        </div>
    </form>
</div>