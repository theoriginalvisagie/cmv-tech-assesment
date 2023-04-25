<?php require APPROOT . '/views/includes/header.php'; ?>
<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Add Itemss</h2>
        <p>Create a post with this form</p>
        <form action="<?php echo URLROOT; ?>/items/add" method="post">
          <div class="form-group">
              <label>Item:<sup>*</sup></label>
              <input type="text" name="item" class="form-control form-control-lg <?php echo (!empty($data['item_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['item']; ?>" placeholder="Add an item...">
              <span class="invalid-feedback"><?php echo $data['item_err']; ?></span>
          </div>    
          <div class="form-group">
              <label>Quantity:<sup>*</sup></label>
              <input type="number" name="quantity" class="form-control form-control-lg <?php echo (!empty($data['qty_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['quantity']; ?>" placeholder="Add quantity of item...">
              <span class="invalid-feedback"><?php echo $data['qty_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
<?php require APPROOT . '/views/includes/footer.php'; ?>
