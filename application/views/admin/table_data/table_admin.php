<?php $admin= $this->admin->checkusername( $this->session->userdata('admin')); ?>
<table id="data" class="table table-bordered table-striped">
  <thead>
    <tr style="background:#EFEFEF;">
      <th>Username</th>
      <th>Admin Level</th>
      <?php if ($admin->level==3): ?>
        <th>Aksi</th>
      <?php endif; ?>
    </tr>
  </thead>

</table>
