<?php
/**
* This file is responsible for plugin settings form
*
*/
if(!defined('ABSPATH')){
	exit;
}
?>
<div class="wrap woo-parcelas-com-e-sem-juros">
	<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

	<form action="options.php" method="post">
		<?php settings_fields($this->option_group); ?>			

		<div data-dismissible="notice-one-forever" class="updated notice notice-success is-dismissible">
        <p><strong>WooCommerce Parcelas com e sem Juros</strong>: Considere ajudar o desenvolvimento do plugin fazendo uma doação via link do <a href="http://mpago.la/1wX11pZ">Mercado Pago</a> pode ser pago via Pix. <br>A versão Premium do Plugin custa apenas R$12,00 anuais com varias melhorias e opções a mais. Compre clicando <a href="http://mpago.la/1PLDHDi">Aqui</a><br>Após o pagamento efetuado favor enviar um email para contato@atitudeti.com.br com o comprovante, enviaremos o email com o plugin na versão paga</p>
    	</div>

		<div class="tabs">
			<h3 class="fs-active"><?php echo __('Geral', 'woo-parcelas-com-e-sem-juros'); ?></h3>
			<div class="section">
				<h3><?php echo __('Opções para parcelamento', 'woo-parcelas-com-e-sem-juros'); ?></h3>				
				<table class="form-table">					
					<?php do_settings_fields($this->page, 'section_general-installments'); ?>
				</table>

				<h3><?php echo __('Opções para pagamento à vista', 'woo-parcelas-com-e-sem-juros'); ?></h3>
				<table class="form-table">
					<?php do_settings_fields($this->page, 'section_general-in_cash'); ?>
				</table>
			</div>

			<h3><?php echo __('Posição', 'woo-parcelas-com-e-sem-juros'); ?></h3>
			<div class="section">				
				<p><?php echo __('Abaixo você pode definir a posição de alinhamento, das informações de parcela e pagamento à vista.', 'woo-parcelas-com-e-sem-juros'); ?></p>
				<table class="form-table">
					<?php do_settings_fields($this->page, 'section_position-alignment'); ?>
				</table>

				<hr />

				<p><?php echo __('Abaixo você pode mudar o local onde o <strong>preço parcelado</strong> aparece.', 'woo-parcelas-com-e-sem-juros'); ?></p>
				<p><?php echo __('Detalhe: caso a opção para pagamento à vista esteja habilitada, o preço à vista será inserido logo após o preço parcelado.', 'woo-parcelas-com-e-sem-juros'); ?></p>
				<table class="form-table">					
					<?php do_settings_fields($this->page, 'section_position-position'); ?>
				</table>				
			</div>

			<h3><?php echo __('Estilo', 'woo-parcelas-com-e-sem-juros'); ?></h3>
			<div class="section style">							
				<div class="installments">
					<h3><?php echo __('Estilo para parcelamento', 'woo-parcelas-com-e-sem-juros'); ?></h3>

					<div class="in_loop">
						<h4><u><?php echo __('Página que lista os produtos', 'woo-parcelas-com-e-sem-juros'); ?></u></h4>

						<div class="wrapper">
							<h5><?php echo __('Prefixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(0)); ?>
							<h5><?php echo __('Preço', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(1)); ?>
							<h5><?php echo __('Sufixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(2)); ?>
						</div>
					</div>

					<div class="in_single">
						<h4><u><?php echo __('Página individual do produto', 'woo-parcelas-com-e-sem-juros'); ?></u></h4>

						<div class="wrapper">
							<h5><?php echo __('Prefixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(3)); ?>
							<h5><?php echo __('Preço', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(4)); ?>
							<h5><?php echo __('Sufixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(5)); ?>
						</div>
					</div>
				</div>

				<hr />

				<div class="in_cash">
					<h3><?php echo __('Estilo para pagamento à vista', 'woo-parcelas-com-e-sem-juros'); ?></h3>

					<div class="in_loop">
						<h4><u><?php echo __('Página que lista os produtos', 'woo-parcelas-com-e-sem-juros'); ?></u></h4>

						<div class="wrapper">
							<h5><?php echo __('Prefixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(6)); ?>
							<h5><?php echo __('Preço', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(7)); ?>
							<h5><?php echo __('Sufixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(8)); ?>
						</div>
					</div>

					<div class="in_single">
						<h4><u><?php echo __('Página individual do produto', 'woo-parcelas-com-e-sem-juros'); ?></u></h4>

						<div class="wrapper">
							<h5><?php echo __('Prefixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(9)); ?>
							<h5><?php echo __('Preço', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(10)); ?>
							<h5><?php echo __('Sufixo', 'woo-parcelas-com-e-sem-juros') ?></h5>
							<?php do_settings_fields($this->page, $this->get_fswp_style_sections(11)); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php submit_button(); ?>
	</form>

	<div id="troubleshooting-tab" class="section">
		<p>Me envie um email com sua <strong>sugestão</strong> ou <strong>crítica</strong>.</p>
		<p><a href="mailto:contato@atitudeti.com.br?Subject=Plugin%20Parcelas" target="_top">contato@atitudeti.com.br</a></p>
		<hr />
		<p>Para qualquer <strong>dúvida</strong> utilize o <strong><a href="https://wordpress.org/support/plugin/woo-parcelas-com-e-sem-juros" target="_top">fórum</a></strong> oficial do plugin.</strong></p>
		<hr />
		<p>Se este plugin é útil para você, considere fazer uma doação e me ajude a manter ele sempre atualizado:</p>
		<p>Considere <strong>AJUDAR</strong> o desenvolvimento do plugin fazendo uma doação via link do <a href="http://mpago.la/1wX11pZ">Mercado Pago</a> pode ser pago via Pix. <br>A versão Premium do Plugin custa apenas R$12,00 anuais com varias melhorias e opções a mais. Compre clicando <a href="http://mpago.la/1PLDHDi">Aqui</a><br>Após o pagamento efetuado favor enviar um email para contato@atitudeti.com.br com o comprovante, enviaremos o email com o plugin na versão paga</p>
	</div>		
	<?php do_action('fswp_after_settings_page_submit_button'); ?>
</div>