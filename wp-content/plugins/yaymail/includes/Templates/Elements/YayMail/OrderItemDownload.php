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
		  id="web-<?php echo esc_attr( $id ); ?>-tracking-item"
		  class="web-tracking-item"
		  align="left"
		  style='font-size: 13px; line-height: 22px; word-break: break-word;
				font-family: <?php echo wp_kses_post( str_replace( '"', '', $attrs['family'] ) ); ?>;
				<?php echo esc_attr( 'padding: ' . $attrs['paddingTop'] . 'px ' . $attrs['paddingRight'] . 'px ' . $attrs['paddingBottom'] . 'px ' . $attrs['paddingLeft'] . 'px;' ); ?>
		  '
		>
		  <div class="yaymail_items_border_custom" style="<?php echo esc_attr( 'color: ' . $attrs['titleColor'] ); ?>">
			<?php echo wp_kses_post( $attrs['contentTitle'] ); ?>
		  </div>
		  <div
		  class="yaymail-items-item-download"
			style="min-height: 5px;
			<?php echo esc_attr( 'color: ' . $attrs['textColor'] ); ?>;
			<?php echo esc_attr( 'border-color: ' . $attrs['borderColor'] ); ?>
			"
		  >
		  <?php echo wp_kses_post( $attrs['content'] ); ?>
		  </div>
		</td>
	  </tr>
	</tbody>
  </table>
