<?php
add_action('admin_menu', 'registrar_menu');

function registrar_menu() {
  add_menu_page(
    'Opções do thema',
    'Opções do thema',
    'manage_options',
    'options_plug_config',
    'options_plug_config_cp',
    'dashicons-admin-generic',
    85
  );
}

function options_plug_config_cp(){
  echo "<h1> Opções do tema </h1>";

  if (!empty($_POST['verificacao'])) {
    $fb       = $_POST['facebook'];
    $inst     = $_POST['Instagram'];
    $linkedin = $_POST['linkedin'];
    $telefone = $_POST['telefone'];
    $email    = $_POST['email'];
    $horario  = $_POST['horario'];
    $endereco = $_POST['endereco'];
    $texto_rodape = $_POST['texto_rodape'];
    $codads = htmlentities(stripslashes($_POST['codads']));

    update_option('po_facebook', $fb);
    update_option('po_Instagram', $inst);
    update_option('po_linkedin', $linkedin);
    update_option('po_telefone', $telefone);
    update_option('po_email', $email);
    update_option('po_horario', $horario);
    update_option('po_endereco', $endereco);
    update_option('po_texto_rodape', $texto_rodape);
    update_option('po_codads', $codads);
  }
  ?>
  <form class="post" action="" method="post">
    <?php wp_nonce_field('identificado-ação', 'verificacao'); ?>
    <div class="" style="padding-right:25px">
      <table class="widefat">
        <thead>
          <th colspan="2"> Cadastro de opções gerais </th>
        </thead>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Facebook', 'wp_admin_style'); ?></label>
          </td>
          <td><input type="text" name="facebook" value="<?php echo esc_attr( get_option( 'po_facebook', '' ) ) ?>" class="regular-text"></td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Instagram', 'wp_admin_style'); ?></label>
          </td>
          <td><input type="text" name="Instagram" value="<?php echo esc_attr( get_option( 'po_Instagram', '' ) ) ?>" class="regular-text"></td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Twitter', 'wp_admin_style'); ?></label>
          </td>
          <td><input type="text" name="linkedin" value="<?php echo esc_attr( get_option( 'po_linkedin', '' ) ) ?>" class="regular-text"></td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Telefone', 'wp_admin_style'); ?></label>
          </td>
          <td><input type="text" name="telefone" value="<?php echo esc_attr( get_option( 'po_telefone', '' ) ) ?>" class="regular-text"></td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Email', 'wp_admin_style'); ?></label>
          </td>
          <td><input type="text" name="email" value="<?php echo esc_attr( get_option( 'po_email', '' ) ) ?>" class="regular-text"></td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Horario de atendimento', 'wp_admin_style'); ?></label>
          </td>
          <td>
            <input type="text" name="horario" value="<?php echo esc_attr( get_option( 'po_horario', '' ) ) ?>"
            class="regular-text">
            <small> Ex: segunda à sexta de hh:mm até hh:mm </small>
          </td>
        </tr>
        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Endereço', 'wp_admin_style'); ?></label>
          </td>
          <td>
            <input type="text" name="endereco" value="<?php echo esc_attr( get_option( 'po_endereco', '' ) ) ?>"
            class="regular-text">
          </td>
        </tr>

        <tr>
          <td class="row-title">
            <label for="tablecell"><?php esc_attr_e('Texto institucional rodape', 'wp_admin_style'); ?></label>
          </td>
          <td>
            <input type="text" name="texto_rodape" value="<?php echo esc_attr( get_option( 'po_texto_rodape', '' ) ) ?>"
            class="regular-text">
          </td>
        </tr>

        <tr>
          <td class="row-title" colspan="2">
            <label for="tablecell"><?php esc_attr_e('Codigo ads', 'wp_admin_style'); ?></label> <br>
            <textarea rows="3" name="codads" value="" class="regular-text" style="width:100%">
              <?php echo esc_attr( get_option( 'po_codads', '' ) ) ?>
            </textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input class="button-primary" type="submit" name="PO_submit" value="Salvar" />
          </td>
        </tr>
      </table>
    </div>
  </form>
  <?php


}
