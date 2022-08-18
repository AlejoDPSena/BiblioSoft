<?php require_once APPROOT."/views/inc/header.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <form action="<?php echo URLROOT ;?>Medico/add">
                <div class="mb-3">
                  <label for="" class="form-label"></label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php require_once APPROOT."/views/inc/footer.php" ?>