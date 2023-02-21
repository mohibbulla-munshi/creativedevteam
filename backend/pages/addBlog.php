<?php include_once $_SERVER['DOCUMENT_ROOT']. '/layouts/header.php'; ?>
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Dashboard</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">
      <div class="page-title">
        <ol class="breadcrumb text-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Basic</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong>Add New Blog</strong>
          </div>
          <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="row form-group">
                <div class="col col-md-3">
                  <label for="text-input" class="form-control-label">Title
                  </label>
                </div>
                <div class="col-12 col-md-9">
                  <input name="textarea-input" id="textarea-input" type="text" rows="9" placeholder="Content..."
                    class="form-control">
                  </input>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descriptin</label>
                </div>
                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"
                    placeholder="Content..." class="form-control"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3"><label for="file-input" class=" form-control-label">image</label>
                </div>
                <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input"
                    class="form-control-file"></div>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->
<!-- footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT']. '/layouts/footer.php'; ?>