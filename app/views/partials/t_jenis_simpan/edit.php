    <template id="t_jenis_simpanEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  T Jenis Simpan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'t_jenis_simpan/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_jenis_simpan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_jenis_simpan">Kode Jenis Simpan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_jenis_simpan"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode Jenis Simpan"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_jenis_simpan"
                                                    placeholder="Enter Kode Jenis Simpan"
                                                    />
                                                    <small v-show="errors.has('kode_jenis_simpan')" class="form-text text-danger">
                                                        {{ errors.first('kode_jenis_simpan') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nama_simpanan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama_simpanan">Nama Simpanan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama_simpanan"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama Simpanan"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama_simpanan"
                                                    placeholder="Enter Nama Simpanan"
                                                    />
                                                    <small v-show="errors.has('nama_simpanan')" class="form-text text-danger">
                                                        {{ errors.first('nama_simpanan') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('besar_simpanan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="besar_simpanan">Besar Simpanan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.besar_simpanan"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Besar Simpanan"
                                                    class="form-control "
                                                    type="number"
                                                    name="besar_simpanan"
                                                    placeholder="Enter Besar Simpanan"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('besar_simpanan')" class="form-text text-danger">
                                                        {{ errors.first('besar_simpanan') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('u_entry')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="u_entry">U Entry <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.u_entry"
                                                    v-validate="{required:true}"
                                                    data-vv-as="U Entry"
                                                    class="form-control "
                                                    type="text"
                                                    name="u_entry"
                                                    placeholder="Enter U Entry"
                                                    />
                                                    <small v-show="errors.has('u_entry')" class="form-text text-danger">
                                                        {{ errors.first('u_entry') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_entri')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_entri">Tgl Entri <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_entri"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Entri"
                                                    name="tgl_entri"
                                                    placeholder="Enter Tgl Entri"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_entri')" class="form-text text-danger">{{ errors.first('tgl_entri') }}</small>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button @click="update()" :disabled="errors.any()" class="btn btn-primary" type="button">
                                            <i class="load-indicator"><clip-loader :loading="saving" color="#fff" size="14px"></clip-loader> </i>
                                            {{submitbuttontext}}
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                                <div v-show="loading" class="load-indicator static-center">
                                    <span class="animator">
                                        <clip-loader :loading="loading" color="gray" size="20px">
                                        </clip-loader>
                                    </span>
                                    <h4 style="color:gray" class="loading-text"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var T_Jenis_SimpanEditComponent = Vue.component('t_jenis_simpanEdit', {
		template : '#t_jenis_simpanEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 't_jenis_simpan',
			},
			routename : {
				type : String,
				default : 't_jenis_simpanedit',
			},
			apipath : {
				type : String,
				default : 't_jenis_simpan/edit',
			},
		},
		data: function() {
			return {
				data : { kode_jenis_simpan: '',nama_simpanan: '',besar_simpanan: '',u_entry: '',tgl_entri: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  T Jenis Simpan';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/t_jenis_simpan');
				}
			},
		},
		watch: {
			id: function(newVal, oldVal) {
				if(this.id){
					this.load();
				}
			},
			modelBind: function(){
				var binds = this.modelBind;
				for(key in binds){
					this.data[key]= binds[key];
				}
			},
			pageTitle: function(){
				this.SetPageTitle( this.pageTitle );
			},
		},
		created: function(){
			this.SetPageTitle(this.pageTitle);
		},
		mounted: function() {
			//this.load();
		},
	});
	</script>
