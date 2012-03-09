<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($dat_usu_usuario->getId(), 'dat_usu_usuario_edit', $dat_usu_usuario) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_username">
  <?php echo $dat_usu_usuario->getUsername() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_password">
  <?php echo $dat_usu_usuario->getPassword() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $dat_usu_usuario->getNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_paterno">
  <?php echo $dat_usu_usuario->getPaterno() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_materno">
  <?php echo $dat_usu_usuario->getMaterno() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $dat_usu_usuario->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $dat_usu_usuario->getTelefono() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_celular">
  <?php echo $dat_usu_usuario->getCelular() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $dat_usu_usuario->getDireccion() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_estado_id">
  <?php echo $dat_usu_usuario->getEstadoId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($dat_usu_usuario->getCreatedAt()) ? format_date($dat_usu_usuario->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($dat_usu_usuario->getUpdatedAt()) ? format_date($dat_usu_usuario->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_cargo_id">
  <?php echo $dat_usu_usuario->getCargoId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_foto">
  <?php echo $dat_usu_usuario->getFoto() ?>
</td>
