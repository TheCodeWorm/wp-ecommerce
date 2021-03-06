<ul class="wf_tabs">
<li>
<input type="radio" name="wf_tabs" id="tab1" checked/>
<label class="wf-tab-name" for="tab1"><?php echo _e( 'Feed Config', 'woo-feed' ); ?></label>

<div id="wf-tab-content1" class="wf-tab-content">
<table class="table tree widefat fixed sorted_table mtable" width="100%" id="table-1">
<thead>
<tr>
	<th></th>
	<th><?php echo ucfirst( $provider ); ?> <?php echo _e( 'Attributes', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Prefix', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Type', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Value', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Suffix', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Output Type', 'woo-feed' ); ?></th>
	<th><?php echo _e( 'Output Limit', 'woo-feed' ); ?></th>
	<th></th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'id' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'id' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'title' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'title' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'description' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'description' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option selected value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps" value="5000"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'item_group_id' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'item_group_id' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'link' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'link' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown('product_type'); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e('Attribute','woo-feed');?></option>
			<option value="pattern"> <?php echo _e('Pattern','woo-feed');?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown('product_type'); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown('current_category'); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e('Attribute','woo-feed');?></option>
			<option value="pattern" selected> <?php echo _e('Pattern','woo-feed');?></option>
		</select>
	</td>
<!--	<td>-->
<!--		<select name="attributes[]" style=" display: none;" id="" class="wf_attr wf_attributes">-->
<!--			--><?php //echo $product->attributeDropdown(); ?>
<!--		</select>-->
<!--		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"   />-->
<!--		<br><span style="font-size:x-small;"><a href="http://webappick.helpscoutdocs.com/article/19-how-to-map-store-category-with-merchant-category" target="_blank">Learn More..</a></span>-->
<!--	</td>-->

    <td>
        <input type="text" name="default[]"  placeholder="Select Google Taxonomy" id="wf_google_taxonomy_input_modal" autocomplete="off" class="wf_default wf_attributes"/>
        <select name="attributes[]" id="" class="wf_attr wf_attributes" style="display:none;">
			<?php echo $product->attributeDropdown( '' ); ?>
        </select>
        <br><span style="font-size:x-small;"><a style="color: red" href="http://webappick.helpscoutdocs.com/article/19-how-to-map-store-category-with-merchant-category" target="_blank">Learn More..</a></span>
    </td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'image' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'image' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'condition' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"><?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"><?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'condition' ); ?>
		</select>
		<input type="text" style=" display: none;" name="default[]" autocomplete="off" class="wf_default wf_attributes"
			/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'availability' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'availability' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'price' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'price' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" value="USD" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option selected value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>

<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'sku' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute"> <?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern"> <?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown( 'sku' ); ?>
		</select>
		<input type="text" name="default[]" autocomplete="off" class="wf_default wf_attributes"
		       style=" display: none;"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option><option value="10">Remove ShortCodes</option><option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
<tr>
	<td>
		<i class="wf_sortedtable dashicons dashicons-menu"></i>
	</td>
	<td>
		<select name="mattributes[]" id="" required class="wf_mattributes">
			<?php echo $dropDown->googleAttributesDropdown( 'brand' ); ?>
		</select>
	</td>
	<td>
		<input type="text" name="prefix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="type[]" class="attr_type wfnoempty">
			<option value="attribute" ><?php echo _e( 'Attribute', 'woo-feed' ); ?></option>
			<option value="pattern" selected><?php echo _e( 'Pattern', 'woo-feed' ); ?></option>
		</select>
	</td>
	<td>
		<select name="attributes[]" style=" display: none;" id="" class="wf_attr wf_attributes">
			<?php echo $product->attributeDropdown(); ?>
		</select>
		<?php
			$url = site_url();
			$WABrand="";
			// Remove all illegal characters from a url
			$url = filter_var($url, FILTER_SANITIZE_URL);
			// Validate url
			if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
				$url=parse_url($url);
				if(array_key_exists('host',$url)){
					$arr = explode('.',$url['host']);
					$WABrand = $arr[count($arr) - 2];
				}
			}
		
		?>
		<input type="text" name="default[]" value="<?php echo $WABrand; ?>" autocomplete="off" class="wf_default wf_attributes"/>
	</td>
	<td>
		<input type="text" name="suffix[]" autocomplete="off" class="wf_ps"/>
	</td>
	<td>
		<select name="output_type[][]" id="" class="outputType wfnoempty">
			<option value="1">Default</option>
			<option value="2">Strip Tags</option>
			<option value="3">UTF-8 Encode</option>
			<option value="4">htmlentities</option>
			<option value="5">Integer</option>
			<option value="6">Price</option>
			<option value="7">Remove Space</option>
            <option value="10">Remove ShortCodes</option>
            <option value="9">Remove Special Character</option>
			<option value="8">CDATA</option>
		</select>
		<i class="dashicons dashicons-editor-expand expandType"></i>
		<i style="display: none;" class="dashicons dashicons-editor-contract contractType"></i>
	</td>
	<td>
		<input type="text" name="limit[]" class="wf_ps"/>
	</td>
	<td>
		<i class="delRow dashicons dashicons-trash"></i>
	</td>
</tr>
</tbody>
<tfoot>
<tr>
	<td>
		<button type="button" class="button-small button-primary" id="wf_newRow">
			<?php echo _e( 'Add New Row', 'woo-feed' ); ?>
		</button>
	</td>
	<td colspan="8">

	</td>
</tr>
</tfoot>
</table>
<table class=" widefat fixed">
	<tr>
        <td align="left" class="">
            <div class="makeFeedResponse"></div>
            <div class="makeFeedComplete"></div>
        </td>
		<td align="right">
			<button type="submit" id="wf_submit" class="wfbtn">
				<?php echo _e( 'Save & Generate Feed', 'woo-feed' ); ?>
			</button>
		</td>
	</tr>
</table>
</div>
</li>
<li>
	<input type="radio" name="wf_tabs" id="tab3"/>
	<label class="wf-tab-name" for="tab3"><?php echo _e( 'FTP', 'woo-feed' ); ?></label>

	<div id="wf-tab-content3" class="wf-tab-content">
		<table class="table widefat fixed mtable" width="100%">
			<tbody>
			<tr>
				<td><?php echo _e( 'Enabled', 'woo-feed' ); ?></td>
				<td>
					<select name="ftpenabled" id="">
						<option value="0"><?php echo _e( 'Disabled', 'woo-feed' ); ?></option>
						<option value="1"><?php echo _e( 'Enabled', 'woo-feed' ); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td><?php echo _e( 'Host Name', 'woo-feed' ); ?></td>
				<td><input type="text" name="ftphost"/></td>
			</tr>
			<tr>
				<td><?php echo _e( 'User Name', 'woo-feed' ); ?></td>
				<td><input type="text" name="ftpuser"/></td>
			</tr>
			<tr>
				<td><?php echo _e( 'Password', 'woo-feed' ); ?></td>
				<td><input type="password" name="ftppassword"/></td>
			</tr>
            <tr>
                <td><?php echo _e( 'Port', 'woo-feed' ); ?></td>
                <td><input type="text" name="ftpport" value="21"/></td>
            </tr>
			<tr>
				<td><?php echo _e( 'Path', 'woo-feed' ); ?></td>
				<td><input type="text" name="ftppath"/></td>
			</tr>
			</tbody>
		</table>
		<table class=" widefat fixed">
			<tr>
				<td align="left" class="makeFeedResponse">

				</td>
				<td align="right">
					<button type="submit" id="wf_submit" class="wfbtn">
						<?php echo _e( 'Save & Generate Feed', 'woo-feed' ); ?>
					</button>
				</td>
			</tr>
		</table>
	</div>
</li>

</ul>
<!--modal inputs for getting Google Taxonomy -->
<div class="container">
    <div class="_wf_popup" data-popup="popup-wf_google_taxonomy_modal" id="wf_google_taxonomy_modal">
        <div class="_wf_popup-inner">
            <form id="wf_google_taxonomy_modal_form_submission" enctype="multipart/form-data" >
                <h2>Select Google Taxonomy</h2><span style="color: red" id="google_taxonomy_error_message"></span>
                <select name="attributes[]" id="googleTaxonomyId" style="" class="googleTaxonomyId">
					<?php echo $dropDown->googleTaxonomy(); ?>
                </select>
                <input  style="float: right" id="wf_google_taxonomy_modal_submit_button" class="wf_google_taxonomy_modal_submit_button" type="button" value="Submit"/>
                <input style="float: right" id="wf_google_taxonomy_modal_cancel_button" class="wf_google_taxonomy_modal_form_button" value="Cancel" type="button"/>
                <a class="_wf_popup-close" id="wf_google_taxonomy_modal_popup_close" href="#">x</a>
            </form>
        </div>
    </div>
</div>