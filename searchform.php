<div class="woo_search woo_search_with_cats">
	<form role="search" class="navbar-search" method="get" action="<?php echo home_url( '/' ); ?>">
		<!-- insert if condition here and label -->
		<div class="input-group">
			<div class="input-search-field">
				<input 	type="search"
					class="form-control search-field product-search-field"
					placeholder="<?php _e('Busque aqui...', 'copycats'); ?>"
					value="<?php echo get_search_query() ?>"
					name="s"
					title="Search"
				/>
			</div>

		    <div class="input-group-addon search-categories d-flex" data-category="">
		        <select name="product_cat" id="cc_header_search_categories_dropdown" class="">
		        	<option value="0" selected="selected">Todas las categorias</option>
		        	<option class="level-0" value="ferreteria">Ferreteria</option>
		        </select>
		    </div>
		    <div class="input-group-btn">
				<button type="submit" class="btn btn-primary"><span class="search-btn">Buscar</span></button>
		    </div>

		</div>

	</form>
</div>