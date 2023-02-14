<?php 
	
	$navbartopleft=array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 't_anggota', 
			'label' => 'T Anggota', 
			'icon' => ''
		),
		
		array(
			'path' => 't_angsur', 
			'label' => 'T Angsur', 
			'icon' => ''
		),
		
		array(
			'path' => 't_jenis_pinjam', 
			'label' => 'T Jenis Pinjam', 
			'icon' => ''
		),
		
		array(
			'path' => 't_jenis_simpan', 
			'label' => 'T Jenis Simpan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pengajuan', 
			'label' => 'T Pengajuan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pengambilan', 
			'label' => 'T Pengambilan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_petugas', 
			'label' => 'T Petugas', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pinjam', 
			'label' => 'T Pinjam', 
			'icon' => ''
		),
		
		array(
			'path' => 't_simpan', 
			'label' => 'T Simpan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_tabungan', 
			'label' => 'T Tabungan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_user', 
			'label' => 'T User', 
			'icon' => ''
		)
	);

	$navbarsideleft=array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 't_anggota', 
			'label' => 'T Anggota', 
			'icon' => ''
		),
		
		array(
			'path' => 't_angsur', 
			'label' => 'T Angsur', 
			'icon' => ''
		),
		
		array(
			'path' => 't_jenis_pinjam', 
			'label' => 'T Jenis Pinjam', 
			'icon' => ''
		),
		
		array(
			'path' => 't_jenis_simpan', 
			'label' => 'T Jenis Simpan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pengajuan', 
			'label' => 'T Pengajuan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pengambilan', 
			'label' => 'T Pengambilan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_petugas', 
			'label' => 'T Petugas', 
			'icon' => ''
		),
		
		array(
			'path' => 't_pinjam', 
			'label' => 'T Pinjam', 
			'icon' => ''
		),
		
		array(
			'path' => 't_simpan', 
			'label' => 'T Simpan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_tabungan', 
			'label' => 'T Tabungan', 
			'icon' => ''
		),
		
		array(
			'path' => 't_user', 
			'label' => 'T User', 
			'icon' => ''
		)
	);

		
	
?>
<template id="AppHeader">
	<b-navbar ref="navbar" toggleable="md" fixed="top" type="dark" variant="dark">
	<b-navbar-brand href="<?php print_link(''); ?>">
		<img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" /> 
		<?php echo SITE_NAME ?>
	</b-navbar-brand>
	<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
	
	<b-collapse is-nav id="nav_collapse">
		<b-navbar-nav>
			<?php render_menu($navbartopleft  , 'left'); ?>
		</b-navbar-nav>

		<!-- Right aligned nav items -->
		<b-navbar-nav class="ml-auto">
			
			
		</b-navbar-nav>
	</b-collapse>
	
</b-navbar>
</template>

<script>
	var AppHeader = Vue.component('AppHeader', {
		template:'#AppHeader',
		mounted:function(){
			//let height = this.$el.offsetHeight;
			if(this.$refs.navbar){
				var height = this.$refs.navbar.offsetHeight;
				document.body.style.paddingTop = height + 'px';
				
				if(this.$refs.sidebar){
					this.$refs.sidebar.style.top = height + 'px';
				}
			}
		}
	})
</script>

<?php
	/**
	 * Build Menu List From Array
	 * Support Multi Level Dropdown Menu Tree
	 * Set Active Menu Base on The Current Page || url
	 * @return  HTML
	 */
	function render_menu($arrMenu,$slot="left"){
		if(!empty($arrMenu)){
			foreach($arrMenu as $menuobj){
				$path = trim($menuobj['path'],"/");
				
				if(PageAccessManager::GetPageAccess($path)=='AUTHORIZED'){

					if(empty($menuobj['submenu'])){
						?>
						<b-nav-item to="/<?php echo ($path); ?>">
							<?php echo (!empty($menuobj['icon']) ? $menuobj['icon'] : null); ?> 
							<?php echo $menuobj['label']; ?>
						</b-nav-item>
						<?php
					}
					else{
						$smenu=$menuobj['submenu'];
						?>
						<b-nav-item-dropdown right>
							<template slot="button-content">
								<?php echo (!empty($menuobj['icon']) ? $menuobj['icon'] : null); ?> 
								<?php echo $menuobj['label']; ?>
								<?php if(!empty($smenu)){ ?><i class="caret"></i><?php } ?>
							</template>
							<?php
								if(!empty($smenu)){
									 render_submenu($smenu);
								}
							?>
						</b-nav-item-dropdown>
						<?php 
					}
				}
			}
		
		}
	}
	
	/**
	 * Render Multi Level Dropdown menu 
	 * Recursive Function
	 * @return  HTML
	 */
	function render_submenu($arrMenu){
		if(!empty($arrMenu)){
			foreach($arrMenu as $key=>$menuobj){
				$path =  trim($menuobj['path'],"/");
				if(PageAccessManager::GetPageAccess($path)=='AUTHORIZED'){
					?>
					<b-dropdown-item to="/<?php echo($path); ?>">
						<?php echo (!empty($menuobj['icon']) ? $menuobj['icon'] : null); ?> 
						<?php echo $menuobj['label']; ?>
						<?php
							if(!empty($menuobj['submenu'])){
								render_menu($menuobj['submenu']); 
							}
						?>
					</b-dropdown-item>
					<?php
				}
			}
		}
	}
?>