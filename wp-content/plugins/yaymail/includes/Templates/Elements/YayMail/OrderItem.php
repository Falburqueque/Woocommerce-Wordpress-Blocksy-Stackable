
<table
 
  cellspacing="0"
  cellpadding="0"
  border="0"
  align="center"
  style="display: table; <?php echo esc_attr( 'background-color: ' . $attrs['backgroundColor'] ); ?>; <?php echo ! $isInColumns ? esc_attr( 'max-width:' . $general_attrs['tableWidth'] . 'px' ) : esc_attr( 'width: 100%' ); ?>;width: 100%;"
  class="web-main-row"
  id="web<?php echo esc_attr( $id ); ?>"
  >
  <tbody>
	  <tr>
		<td
		  id="web-<?php echo esc_attr( $id ); ?>-order-item"
		  class="web-order-item"
		  align="left"
		  style='font-size: 13px; line-height: 22px; word-break: break-word;
		  <?php echo 'font-family: ' . wp_kses_post( str_replace( '"', '', $attrs['family'] ) ); ?>;
		  <?php echo esc_attr( 'padding: ' . $attrs['paddingTop'] . 'px ' . $attrs['paddingRight'] . 'px ' . $attrs['paddingBottom'] . 'px ' . $attrs['paddingLeft'] . 'px;' ); ?>
		  '
		>
		  <div
			style="min-height: 10px; <?php echo esc_attr( 'color: ' . $attrs['textColor'] ); ?>;"
		  >
		  <?php echo wp_kses_post( $attrs['contentBefore'] ); ?>
			<h2
			  class="yaymail_builder_order"
			  style="font-size: 18px; font-weight: 700; <?php echo esc_attr( 'color: ' . $attrs['titleColor'] ); ?>"
			>
			  <div class="yaymail_builder_order_title" style='<?php echo 'font-family: ' . wp_kses_post( str_replace( '"', '', $attrs['family'] ) ); ?>;'>
				<?php echo wp_kses_post( $attrs['contentTitle'] ); ?>
			  </div>
			</h2>
			<div>
			  <table
				class="yaymail_builder_table_items_content yaymail_order_items_content yaymail_element_order_item"
				cellspacing="0" 
				cellpadding="6" 
				border="1" 
				width="100%"
				style='border-collapse: separate; 
				<?php echo esc_attr( 'color: ' . $attrs['textColor'] ); ?>;
				<?php echo esc_attr( 'border: 1px solid ' . $attrs['borderColor'] ); ?>;
				<?php echo 'font-family: ' . wp_kses_post( str_replace( '"', '', $attrs['family'] ) ); ?>;'
				>
				<?php echo wp_kses_post( $attrs['content'] ); ?>
			  </table>
			</div>
			<?php echo wp_kses_post( $attrs['contentAfter'] ); ?>
		  </div>
		</td>
	  </tr>
	</tbody>
  </table>
