<?= $this->extend('template/v_admin_2B') ?>

<?= $this->section('content') ?>

<style>
/* custom style */
</style>

    <h1><?= $pageTitle; ?></h1>
    <table class="table table-bordered" id="dtbl_keyreg" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="big25">SN</th>
          <th>Type</th>
          <th>Taken Date & Time</th>
          <th>Taken By</th>
          <th>Reason</th>
          <th>Return Date & Time</th>
          <th>Return By</th>
          <th>Remarks</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($qryKeyreg as $row) : ?>
        <tr>
            <td><?php echo $row['uid']; ?></td>
            <td>Key Type</td>
            <td>Taken Date&Time</td>
            <td>Taken By</td>
            <td><?php echo $row['Reason']; ?></td>
            <td>Return Date&Time</td>
            <td>Return By</td>
            <td><?php echo $row['Notes']; ?></td>
            <td><a  href="<?php echo base_url(); ?>/keyreg/edit/<?php echo $row['uid']; ?>" class="btn btn-warning btn-sm">Edit</a>&nbsp;<a  href="<?php echo base_url(); ?>/keyreg/delete/<?php echo $row['uid']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        <?php endforeach; ?>  
      </tbody>
    </table>



<?= $this->endSection() ?>