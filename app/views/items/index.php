<?php require APPROOT . '/views/includes/header.php'; ?>
  <?php flash('item_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
    <h1>Shopping Items</h1>
    </div>
    <div class="col-md-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/items/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Post</a>
    </div>
  </div>

  <ul>
  <?php foreach($data as $key=>$value) : ?>
      <li>
        <input type='checkbox' name='checkbox_<?php echo $value['id']?>' >
        <label for='checkbox_<?php echo $value['id']?>' class="card-title">Item: <?php echo $value['item']." x ". $value['qty'] ?></label>
      </li>
  <?php endforeach; ?>
  </ul>
<?php require APPROOT . '/views/includes/footer.php'; ?>