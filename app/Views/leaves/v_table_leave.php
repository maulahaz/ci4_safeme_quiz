<table id="my_table" class="table table-sm table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>SN</th>
      <th>From date</th>
      <th>Until date</th>
      <th>Leave Type</th>
      <th>Notes</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $sn = 1;?>
    <?php foreach($qry as $row) : ?>
      <tr>
          <td class="text-center"><?= $sn++; ?></td>
          <td><?= get_nice_date($row['From_dt'], "mydate"); ?></td>
          <td><?= get_nice_date($row['Until_dt'], "mydate"); ?></td>
          <td><?= $row['Type']; ?></td>
          <td><?= $row['Notes']; ?></td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url(); ?>/leaves/edit/<?= $row['uid']; ?>">Edit</a>
                <a class="dropdown-item" href="<?= base_url(); ?>/leaves/delete/<?= $row['uid']; ?>" onclick="return confirm('Are you sure ?')">Delete</a>
              </div>
            </div>
          </td>
      </tr>
      <?php endforeach; ?>  
    </tbody>
</table>

<script>
  $(document).ready(function() {
    $('#my_table').DataTable({
      "columnDefs": [
         { 
            "targets": [ 0,-1 ], //first and last column
            "orderable": false, //set not orderable
          },
        ],
    });
  });
</script>