<table  class="table table-hover">
  <thead>
      <tr style="background:#EFEFEF;">
      <th class="text-center">No.</th>
      <th class="text-center">Judul</th>
      <th class="text-center">Deskripsi</th>
      <th class="text-center">Waktu Broadcast</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $ctr = $page; foreach ($dataku as $key => $value) {?>
    <tr>
        <td class="text-center"><?php echo ++$ctr; ?></td>
        <td class="text-center"><?php echo $value->title ?></td>
        <td class="text-center"><?php echo $value->description ?></td>
        <td class="text-center"><?php echo date('d-m-Y H:i:s',strtotime($value->created_at)) ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
