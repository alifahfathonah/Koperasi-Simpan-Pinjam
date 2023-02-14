    <template id="t_petugasEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  T Petugas</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'t_petugas/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_petugas')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_petugas">Kode Petugas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_petugas"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode Petugas"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_petugas"
                                                    placeholder="Enter Kode Petugas"
                                                    />
                                                    <small v-show="errors.has('kode_petugas')" class="form-text text-danger">
                                                        {{ errors.first('kode_petugas') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nama_petugas')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama_petugas">Nama Petugas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama_petugas"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama Petugas"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama_petugas"
                                                    placeholder="Enter Nama Petugas"
                                                    />
                                                    <small v-show="errors.has('nama_petugas')" class="form-text text-danger">
                                                        {{ errors.first('nama_petugas') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('alamat_petugas')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="alamat_petugas">Alamat Petugas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.alamat_petugas"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Alamat Petugas"
                                                    class="form-control "
                                                    type="text"
                                                    name="alamat_petugas"
                                                    placeholder="Enter Alamat Petugas"
                                                    />
                                                    <small v-show="errors.has('alamat_petugas')" class="form-text text-danger">
                                                        {{ errors.first('alamat_petugas') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('no_telp')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="no_telp">No Telp <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.no_telp"
                                                    v-validate="{required:true}"
                                                    data-vv-as="No Telp"
                                                    class="form-control "
                                                    type="text"
                                                    name="no_telp"
                                                    placeholder="Enter No Telp"
                                                    />
                                                    <small v-show="errors.has('no_telp')" class="form-text text-danger">
                                                        {{ errors.first('no_telp') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('jenis_kelamin')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.jenis_kelamin"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Jenis Kelamin"
                                                    class="form-control "
                                                    type="text"
                                                    name="jenis_kelamin"
                                                    placeholder="Enter Jenis Kelamin"
                                                    />
                                                    <small v-show="errors.has('jenis_kelamin')" class="form-text text-danger">
                                                        {{ errors.first('jenis_kelamin') }}
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
	var T_PetugasEditComponent = Vue.component('t_petugasEdit', {
		template : '#t_petugasEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 't_petugas',
			},
			routename : {
				type : String,
				default : 't_petugasedit',
			},
			apipath : {
				type : String,
				default : 't_petugas/edit',
			},
		},
		data: function() {
			return {
				data : { kode_petugas: '',nama_petugas: '',alamat_petugas: '',no_telp: '',jenis_kelamin: '',u_entry: '',tgl_entri: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  T Petugas';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/t_petugas');
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
